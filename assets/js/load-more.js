document.addEventListener('DOMContentLoaded', function () {
  const loadMoreButton = document.getElementById('load-more');
  const podcastList = document.getElementById('podcast-list');
  let currentPage = 1;
  const postsPerPage = window.innerWidth <= 768 ? 5 : 10;

  loadMoreButton.addEventListener('click', function () {
    
    const formData = new FormData();
    formData.append('action', 'load_more_podcasts');
    formData.append('nonce', load_more_params.nonce);
    formData.append('page', currentPage + 1);
    formData.append('posts_per_page', postsPerPage);
    console.log(formData)

    fetch(load_more_params.ajax_url, {
      method: 'POST',
      credentials: 'same-origin',
      body: formData
    })
      .then(response => response.json())
      .then(data => {
        if (data.success && data.data) {
          podcastList.insertAdjacentHTML('beforeend', data.data);
          currentPage++;

          const loadedPosts = (data.data.match(/class="podcast-item"/g) || []).length;

          if (loadedPosts < postsPerPage) {
            loadMoreButton.style.display = 'none';
          }
        } else {
          loadMoreButton.style.display = 'none';
        }
      })
      .catch(error => {
        console.error('Error:', error);
      });
  });
});
