const userName = "User Name"; 

const commentInput = document.getElementById('comment-input');
const commentSection = document.getElementById('comment-section');
const submitCommentButton = document.getElementById('submit-comment');

document.addEventListener('DOMContentLoaded', loadComments);

submitCommentButton.addEventListener('click', () => {
    const commentText = commentInput.value.trim();
    if (commentText) {
        addComment(commentText, userName);
        commentInput.value = '';
    }
});

function addComment(text, name) {
    const comment = { text, name, timestamp: new Date().toLocaleString() };
    saveComment(comment);
    renderComment(comment);
}

function saveComment(comment) {
    const comments = JSON.parse(localStorage.getItem('comments')) || [];
    comments.push(comment);
    localStorage.setItem('comments', JSON.stringify(comments));
}

function loadComments() {
    const comments = JSON.parse(localStorage.getItem('comments')) || [];
    comments.forEach(renderComment);
}

function renderComment(comment) {
    const commentDiv = document.createElement('div');
    commentDiv.classList.add('comment');

    const commentContent = document.createElement('p');
    commentContent.textContent = comment.text;

    const timeInfo = document.createElement('span');
    timeInfo.classList.add('timestamp');
    timeInfo.textContent = `Dikirim oleh ${comment.name} pada: ${comment.timestamp}`;

    const editButton = createButton('Edit', 'edit-button', () => editComment(commentContent, commentDiv));
    const deleteButton = createButton('Hapus', 'delete-button', () => {
        commentDiv.remove();
        removeComment(comment);
    });
    const replyButton = createButton('Balas', 'reply-button', () => showReplyInput(commentDiv));

    commentDiv.appendChild(commentContent);
    commentDiv.appendChild(timeInfo);
    commentDiv.appendChild(editButton);
    commentDiv.appendChild(deleteButton);
    commentDiv.appendChild(replyButton);
    commentSection.appendChild(commentDiv);
}

function removeComment(commentToRemove) {
    let comments = JSON.parse(localStorage.getItem('comments')) || [];
    comments = comments.filter(comment => comment.text !== commentToRemove.text || comment.timestamp !== commentToRemove.timestamp);
    localStorage.setItem('comments', JSON.stringify(comments));
}

function createButton(text, className, onClick) {
    const button = document.createElement('button');
    button.textContent = text;
    button.classList.add(className, 'button');
    button.onclick = onClick;
    return button;
}

function editComment(commentContent, commentDiv) {
    const newInput = document.createElement('textarea');
    newInput.value = commentContent.textContent;

    const saveButton = createButton('Simpan', 'button', () => {
        commentContent.textContent = newInput.value;
        commentDiv.removeChild(newInput);
        commentDiv.removeChild(saveButton);
        updateComment(commentContent.textContent);
    });

    commentDiv.appendChild(newInput);
    commentDiv.appendChild(saveButton);
}

function updateComment(updatedText) {
    let comments = JSON.parse(localStorage.getItem('comments')) || [];
    comments = comments.map(comment => {
        if (comment.text === updatedText) {
            comment.text = updatedText;
            comment.timestamp = new Date().toLocaleString();
        }
        return comment;
    });
    localStorage.setItem('comments', JSON.stringify(comments));
}

function showReplyInput(commentDiv) {
    const replyInput = document.createElement('textarea');
    replyInput.placeholder = 'Tulis balasan...';
    replyInput.style.width = '100%';
    replyInput.style.marginBottom = '5px';

    const replyNameInput = document.createElement('input');
    replyNameInput.placeholder = 'Nama Anda untuk Balasan...';
    replyNameInput.value = userName; 
    replyNameInput.style.width = '100%';
    replyNameInput.style.marginBottom = '5px';

    const replyButton = createButton('Kirim Balasan', 'reply-button', () => {
        const replyText = replyInput.value.trim();
        const replyUserName = replyNameInput.value.trim();
        if (replyText && replyUserName) {
            addComment(replyText, replyUserName);
            commentDiv.removeChild(replyInput);
            commentDiv.removeChild(replyNameInput);
            commentDiv.removeChild(replyButton);
        }
    });

    commentDiv.appendChild(replyNameInput);
    commentDiv.appendChild(replyInput);
    commentDiv.appendChild(replyButton);
}