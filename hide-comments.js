function hideComments(){  //Show Comments i Hide Comments implementacija
    commentsUl = document.getElementsByName("comments-ul");
    hideCommentsButton = document.getElementsByName("hide-comments-button");
    console.log(hideCommentsButton);

    if (commentsUl[0].style.display === "none") {
        commentsUl[0].style.display = "block";
        hideCommentsButton[0].innerText = "Hide Comments";
    } else {
        commentsUl[0].style.display = "none";
        hideCommentsButton[0].innerText = "Show Comments";
    }
    console.log(commentsUl);
}