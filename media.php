<?php include('includes/header.php') ?>


<section class="innner-banner position-relative">
    <picture>
        <img src="public/images/inner-banner.jpg" width="1241" height="406" alt="About Us Banner">
    </picture>
    <div class="container-ctn">
        <ul class="breadcrumb">
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                Media
            </li>
        </ul>
    </div>
</section>

<picture>




<section class="media commonPadding-120 position-relative">
    <div class="container-ctn">
      <div class="head text-center">
                <h2>Our Media</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
        <div class="d-flex flex-wrap justify-content-center align-items-center">
        <!-- Mobile Dropdown -->
          <select class="filter-dropdown d-lg-none">
              <option value="all">All</option>
              <option value="office">Office</option>
              <option value="functions">Functions</option>
              <option value="events">Events</option>
              <option value="award">Award Ceremony</option>
          </select>
            <div class="filter-buttons d-none d-lg-flex justify-content-center">
                
                <button data-filter="all" class="active">All Categories</button>
                <button data-filter="office">
                    Office 
                </button>
                <button data-filter="functions">
                    Functions 
                </button>
                <button data-filter="events">
                    Events 
                </button>
                <button data-filter="award">
                    Award Ceremony 
                </button>
            </div>
        </div>
        <div class="d-flex flex-wrap gallery">

                <div class="gallery-item office">
                    <img src="public/images/media/1.jpg" width="289" height="298" alt="Office">
                    <div class="caption">Office</div>
                </div>
                <div class="gallery-item functions">
                    <img src="public/images/media/2.jpg"  width="289" height="298" alt="Functions">
                    <div class="caption">Functions</div>
                </div>
                <div class="gallery-item functions">
                    <img src="public/images/media/3.jpg"  width="289" height="298" alt="Functions">
                    <div class="caption">Functions</div>
                </div>
                <div class="gallery-item events">
                    <img src="public/images/media/4.jpg"  width="289" height="298" alt="Events">
                    <div class="caption">Events</div>
                </div>
                <div class="gallery-item functions">
                    <img src="public/images/media/5.jpg"  width="289" height="298" alt="Functions">
                    <div class="caption">Functions</div>
                </div>
                <div class="gallery-item award">
                    <img src="public/images/media/6.jpg" width="289" height="298"  alt="Award Ceremony">
                    <div class="caption">Award Ceremony</div>
                </div>
                <div class="gallery-item award">
                    <img src="public/images/media/7.jpg"  width="289" height="298" alt="Award Ceremony">
                    <div class="caption">Award Ceremony</div>
                </div>
                <div class="gallery-item office">
                    <img src="public/images/media/8.jpg" width="289" height="298"  alt="Office">
                    <div class="caption">Office</div>
                </div>
                <div class="gallery-item functions">
                    <img src="public/images/media/9.jpg" width="289" height="298"  alt="Functions">
                    <div class="caption">Functions</div>
                </div>
                <div class="gallery-item award">
                    <img src="public/images/media/10.jpg" width="289" height="298"  alt="Award Ceremony">
                    <div class="caption">Award Ceremony</div>
                </div>
                <div class="gallery-item award">
                    <img src="public/images/media/11.jpg" width="289" height="298"  alt="Award Ceremony">
                    <div class="caption">Award Ceremony</div>
                </div>
                <div class="gallery-item award">
                    <img src="public/images/media/12.jpg" width="289" height="298"  alt="Award Ceremony">
                    <div class="caption">Award Ceremony</div>
                </div>
            </div>
        </div>
    </div>
</section>




<div id="customPopup" class="popup-overlay">
    <div class="popup-card position-relative">
        <span class="close-btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"> <path d="M7.75684 16.2438L16.2428 7.75781M16.2428 16.2438L7.75684 7.75781" stroke="#414A66" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/> </svg></span>
        <img class="popup-image" src="" alt="Large Image">
        <div class="d-flex flex-wrap justify-content-between">
            <div class="popup-caption"></div>
            <div class="popup-nav d-flex flex-wrap">
                <span class="prev-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"> <path d="M10.5 5.25L6.75 9L10.5 12.75" stroke="#B5B7BD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                    Prev
                </span>
                <span class="next-btn">
                    Next
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"> <path d="M7.5 5.25L11.25 9L7.5 12.75" stroke="#B5B7BD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                </span>
            </div>
        </div>
    </div>
</div>




<?php include('includes/footer.php') ?>



<script>
  document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll('.filter-buttons button');
    const dropdown = document.querySelector('.filter-dropdown');
    const items = document.querySelectorAll('.gallery-item');

    function updateCounts() {
      buttons.forEach(button => {
        const filter = button.getAttribute('data-filter');
        let count;

        if (filter === 'all') {
          count = items.length;
        } else {
          count = [...items].filter(item => item.classList.contains(filter)).length;
        }

        let countSpan = button.querySelector('.count');
        if (!countSpan) {
          countSpan = document.createElement('span');
          countSpan.classList.add('count');
          button.appendChild(countSpan);
        }

        countSpan.textContent = ` ${count}`;

        // Update dropdown count as well
        const dropdownOption = dropdown.querySelector(`option[value="${filter}"]`);
        if (dropdownOption) {
          dropdownOption.textContent = `${capitalize(filter)} ${count}`;
        }
      });
    }

    function filterSelection(category) {
      items.forEach(item => {
        item.style.display = (category === 'all' || item.classList.contains(category)) ?
          'block' : 'none';
      });

      buttons.forEach(btn => btn.classList.remove('active'));
      const activeBtn = document.querySelector(`.filter-buttons button[data-filter="${category}"]`);
      if (activeBtn) activeBtn.classList.add('active');

      dropdown.value = category;
    }

    // Button click
    buttons.forEach(button => {
      button.addEventListener('click', function () {
        const category = this.getAttribute('data-filter');
        filterSelection(category);
      });
    });

    // Dropdown change
    dropdown.addEventListener('change', function () {
      const category = this.value;
      filterSelection(category);
    });

    function capitalize(str) {
      if (str === 'all') return 'All';
      return str.charAt(0).toUpperCase() + str.slice(1);
    }

    updateCounts();
    filterSelection('all');
  });
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const popup = document.getElementById("customPopup");
  const popupImg = popup.querySelector(".popup-image");
  const captionEl = popup.querySelector(".popup-caption");
  const closeBtn = popup.querySelector(".close-btn");
  const nextBtn = popup.querySelector(".next-btn");
  const prevBtn = popup.querySelector(".prev-btn");

  const galleryItems = document.querySelectorAll(".gallery-item");
  let imageList = [];
  let currentIndex = 0;

  galleryItems.forEach((item, index) => {
    const img = item.querySelector("img");
    if (!img) return;

    imageList.push({
      src: img.src,
      caption: img.alt || img.dataset.caption || ""
    });

    item.addEventListener("click", () => {
      currentIndex = index;
      openPopup();
    });
  });

  function openPopup() {
    popupImg.src = imageList[currentIndex].src;
    captionEl.textContent = imageList[currentIndex].caption;
    popup.style.display = "flex";
  }

  nextBtn.addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % imageList.length;
    openPopup();
  });

  prevBtn.addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + imageList.length) % imageList.length;
    openPopup();
  });

  closeBtn.addEventListener("click", () => popup.style.display = "none");

  popup.addEventListener("click", (e) => {
    if (e.target === popup) popup.style.display = "none";
  });
});
</script>


