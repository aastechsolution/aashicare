<style>
    @import url("https://fonts.googleapis.com/css?family=Titillium+Web:400,700&display=swap");

*,
*::before,
*::after {
  box-sizing: border-box;
}

body {
  margin: 0;
  padding: 0;
  // height: 100vh;
  // display: grid;
  // grid-template-rows: 1fr 3fr 1.5fr;
  // grid-template-columns: 50px 1fr 1fr 1fr 1fr 50px;
  // row-gap: 2vh;
  font-family: "Titillium Web", sans-serif;
}

.carousel {
  min-height: 560px;
  display: grid;
  grid-template-rows: 1fr 3fr 1.5fr;
  grid-template-columns: 50px 1fr 1fr 1fr 1fr 50px;
  row-gap: 2vh;
  position: relative;
}

.progress-bar {
  position: absolute;
  top: 0;
  left: 0;
  height: 5px;
  width: 100%;
  &__fill {
    width: 0;
    height: inherit;
    background: #c20000;
    transition: all 0.16s;
  }
  &--primary {
    z-index: 2;
  }
}



.main-post-wrapper {
  
  // height: 100vh;
  // border: solid 2px green;
  
  grid-row: 1 / 4;
  grid-column: 1 / 7;
  
  position: relative;
}
.slides {
  width: 100%;
  height: 100%;
  position: relative;
  overflow: hidden;
}

.main-post {
  position: absolute;
  top: 100%;
  right: 0;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  &__image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    bottom: 0;
    img {
      width: 100%;
      height: 100%;
      display: block;
      object-fit: cover;
    }
    &::before {
      content: "";
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(#0e0d0e, 0.5);
    }
  }
  &__content {
    position: absolute;
    top: 40%;
    left: 4%;
    transform: translateY(-40%);
    color: #fff;
    width: 90%;
  }
  &__tag-wrapper {
    margin: 0;
    display: inline-flex;
    overflow: hidden;
  }
  &__tag {
    font-size: 0.95em;
    background: #c20000;
    padding: 6px 18px;
  }
  &__title {
    font-weight: 700;
    font-size: 1.95em;
    line-height: 1.25;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
  }
  &__link {
    text-decoration: none;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    display: inline-flex;
    align-items: center;
    &-text {
      font-size: 0.9em;
    }
    &-icon {
      &--arrow {
        margin-left: 12px;
      }
      &--play-btn {
        margin-right: 12px;
      }
    }
  }
}

.main-post__link:hover .main-post__link-text,
.main-post__link:hover .main-post__link-icon--arrow path {
  color: #c20000;
  stroke: #c20000;
}

.main-post--active {
  top: 0;
  z-index: 1;
  transition: top 0.9s 0.4s ease-out;
}

.main-post--not-active {
  top: 100%;
  z-index: 0;
  transition: top 0.75s 2s;
}

.main-post.main-post--active .main-post__tag-wrapper {
  width: 25%;
  transition: all 0.98s 1.9s;
}
.main-post.main-post--not-active .main-post__tag-wrapper {
  width: 0;
  transition: width 0.3s 0.2s;
}

.main-post.main-post--active .main-post__title {
  opacity: 1;
  transform: translateY(0);
  transition: opacity 0.8s 1.42s, transform 0.5s 1.4s;
}

.main-post.main-post--not-active .main-post__title {
  transform: translateY(40px);
  opacity: 0;
  transition: transform 0.2s 0.35s, opacity 0.5s 0.2s;
}

.main-post.main-post--active .main-post__link {
  opacity: 1;
  transition: opacity 0.9s 2.2s;
}

.main-post.main-post--not-active .main-post__link {
  opacity: 0;
  transition: opacity 0.5s 0.2s;
}

.posts-wrapper {
  grid-row: 3 / 4;
  grid-column: 3 / 6;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  column-gap: 14px;
  z-index: 1;
}

.post {
  background: rgba(#0e0d0e, 0.6);
  opacity: 0.3;
  color: #fff;
  position: relative;
  padding: 16px 20px;
  &__header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 0.8em;
  }
  &__tag {
    color: #80837e;
  }
  &__title {
    font-weight: 400;
    font-size: 0.95em;
    line-height: 1.5;
  }
  &--active {
    opacity: 1;
    background: rgba(#0e0d0e, 0.75);
  }
  &:not(.post--active) {
    pointer-events: none;
  }
}

.hide-on-mobile {
  display: none;
}

@media screen and (min-width: 768px) {
  .main-post__title {
    font-size: 2.9em;
  }
}
@media screen and (min-width: 1024px) {
  .hide-on-mobile {
    display: grid;
  }
  .posts-wrapper {
    grid-column: 2 / 6;
  }
  .hide-on-desktop {
    display: none;
  }
}

@media screen and (min-width: 1440px) {
  .main-post__content {
    width: 45%;
  }
  .posts-wrapper {
    grid-column: 3 / 6;
  }
}
</style>    
<div class="carousel">
    <div class="progress-bar progress-bar--primary hide-on-desktop">
        <div class="progress-bar__fill"></div>
    </div>
    <header class="main-post-wrapper">
    <br><br><br>
        <div class="slides">
            <article class="main-post main-post--active">
                <div class="main-post__image">
                    <img src="../../aashicare/assets/images/banner/image4.png" alt="" />
                </div>
            </article>
            <article class="main-post main-post--not-active">
                <div class="main-post__image">
                    <img src="../../aashicare/assets/images/banner/image2.png" alt="" />
                </div>
            </article>
            <article class="main-post main-post--not-active">
                <div class="main-post__image">
                    <img src="../../aashicare/assets/images/banner/image3.png" alt="" />
                </div>
            </article>
        </div>
    </header>

    <div class="posts-wrapper hide-on-mobile">
        <article class="post post--active">
            <div class="progress-bar">
                <div class="progress-bar__fill"></div>
            </div>
        </article>
        <article class="post">
            <div class="progress-bar">
                <div class="progress-bar__fill"></div>
            </div>
        </article>
    </div>
</div>

<script>
    let mainPosts = document.querySelectorAll(".main-post");
let posts = document.querySelectorAll(".post");

let i = 0;
let postIndex = 0;
let currentPost = posts[postIndex];
let currentMainPost = mainPosts[postIndex];

let progressInterval = setInterval(progress, 100); // 180

function progress() {
  if (i === 100) {
    i = -5;
    // reset progress bar
    currentPost.querySelector(".progress-bar__fill").style.width = 0;
    document.querySelector(
      ".progress-bar--primary .progress-bar__fill"
    ).style.width = 0;
    currentPost.classList.remove("post--active");

    postIndex++;

    currentMainPost.classList.add("main-post--not-active");
    currentMainPost.classList.remove("main-post--active");

    // reset postIndex to loop over the slides again
    if (postIndex === posts.length) {
      postIndex = 0;
    }

    currentPost = posts[postIndex];
    currentMainPost = mainPosts[postIndex];
  } else {
    i++;
    currentPost.querySelector(".progress-bar__fill").style.width = `${i}%`;
    document.querySelector(
      ".progress-bar--primary .progress-bar__fill"
    ).style.width = `${i}%`;
    currentPost.classList.add("post--active");

    currentMainPost.classList.add("main-post--active");
    currentMainPost.classList.remove("main-post--not-active");
  }
}
</script>