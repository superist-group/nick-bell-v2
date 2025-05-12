document.addEventListener("DOMContentLoaded", function () {
  headerToggle();
  openSubmenu();
  initLogoSwiper();
  initPodcastSwiper();
  threeColSwiper();
  playVideo();
  loadMore();

});

function headerToggle() {
  const toggleBtns = document.querySelectorAll('.menu-toggle');
  const body = document.body;
  if (toggleBtns.length) {
    toggleBtns.forEach(btn => {
      btn.addEventListener('click', function () {
        body.classList.toggle('menu-open');
      });
    });
  }
}

function openSubmenu() {
  const menuItems = document.querySelectorAll('.header-menu li.menu-item-has-children > a');

  menuItems.forEach(menuItem => {
    menuItem.addEventListener('click', function(e) {
      e.preventDefault(); // Prevent link navigation

      const parentLi = this.parentElement;
      const isOpen = parentLi.classList.contains('submenu-open');

      // Close all submenus
      document
        .querySelectorAll('.header-menu li.menu-item-has-children.submenu-open')
        .forEach(li => li.classList.remove('submenu-open'));

      // If it wasn't open, open it now
      if (!isOpen) {
        parentLi.classList.add('submenu-open');
      }
      // otherwise leave it closed
    });
  });
}



function initLogoSwiper() {
  const swiperWrapper = document.querySelector('.logoSwiper .swiper-wrapper');
  if (!swiperWrapper) return;

  const slides = swiperWrapper.querySelectorAll('.swiper-slide');

  if (slides.length < 10) {
    slides.forEach(slide => {
      const clone = slide.cloneNode(true);
      swiperWrapper.appendChild(clone);
    });
  }

  new Swiper('.logoSwiper', {
    loop: true,
    slidesPerView: 'auto',
    spaceBetween: 56,
    centeredSlides: true,
    speed: 4000,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
    freeMode: true,
    freeModeMomentum: false,
    breakpoints: {
      768: {
        spaceBetween: 88,
      }
    },
  });
}


function initPodcastSwiper() {
  const podcastEl = document.querySelector('.podcast-slider');
  if (!podcastEl) return;

  new Swiper('.podcast-slider', {
    slidesPerView: 1,
    spaceBetween: 12,
    loop: false,
    // centeredSlides: true,
    freeMode: false,
    freeModeMomentum: false,
    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 16,
      },
      991: {
        slidesPerView: 3,
        spaceBetween: 24,
      },
      1280: {
        slidesPerView: 4,
        spaceBetween: 24,
      }
    },
  });
}


function threeColSwiper() {
  new Swiper('.three-col-slider', {
    slidesPerView: 1,
    spaceBetween: 12,
    loop: false,
    // centeredSlides: true,
    freeMode: false,
    freeModeMomentum: false,
    breakpoints: {
      0: {
        slidesPerView:1,
        spaceBetween: 12,
      },
      640: {
        slidesPerView: 1.5,
        spaceBetween: 16,
      },
      991: {
        slidesPerView:2.15,
        spaceBetween: 24,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 24,
      }
    },
  });
}

function playVideo() {
  const playButton = document.querySelector('.play-button-overlay');
  const thumbnailContainer = document.getElementById('thumbnailContainer');

  if (playButton && thumbnailContainer) {
    playButton.addEventListener('click', function () {
      const videoUrl = thumbnailContainer.getAttribute('data-video-url');

      if (videoUrl) {
        // Create wrapper div with class video-container
        const videoWrapper = document.createElement('div');
        videoWrapper.className = 'video-container';

        // Create iframe element
        const iframe = document.createElement('iframe');
        iframe.setAttribute('src', videoUrl + '?autoplay=1');
        iframe.setAttribute('frameborder', '0');
        iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture');
        iframe.setAttribute('allowfullscreen', '');
        iframe.style.width = '100%';
        iframe.style.height = '100%';

        // Append iframe to wrapper
        videoWrapper.appendChild(iframe);

        // Clear existing content and append video wrapper
        thumbnailContainer.innerHTML = '';
        thumbnailContainer.appendChild(videoWrapper);
      }
    });
  }
}


function loadMore() {
  const loadMoreBtn = document.getElementById('load-more');
  if (loadMoreBtn) {
    loadMoreBtn.addEventListener('click', function() {
      
  
      const hiddenPosts = document.querySelectorAll('#podcast-list .tb-hidden');
      const postsToShow = Math.min(hiddenPosts.length, 5);
      for (let i = 0; i < postsToShow; i++) {
          if (hiddenPosts[i]) {
              hiddenPosts[i].classList.remove('tb-hidden');
          }
      }
      if (hiddenPosts.length <= postsToShow) {
          this.style.display = 'none'; // Hide button if no more posts
      }
    });

  }
}
