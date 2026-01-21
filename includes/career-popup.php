<div class="modal fade careerForm" id="careerForm" aria-hidden="true" aria-labelledby="careerFormLabel" tabindex="-1"
  role="dialog" aria-modal="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="careerFormClose">
    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
  <path d="M1 12.3147L12.3147 1M12.3147 12.3147L1 1" stroke="#4F5762" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
      </button>

      <div class="modal-body p-0">
        <!-- Label used by aria-labelledby -->
        <p class="title h3 " id="careerFormLabel">
         Apply Now
        </p>


        <form id="careerMainForm" action="" method="post" enctype="multipart/form-data"
          class="d-flex flex-wrap justify-content-between" novalidate>
          <!-- Row 1 -->
          <div class="formGroup col--6">
              <label for=" careerName">Name*</label>
             <input type="text" class="form-control" placeholder="Enter your name" id="careerName" name="careerName">
          </div>

          <div class="formGroup col--6">
             <label for=" careerEmail">Email*</label>
            <input type="email" class="form-control" placeholder="Enter your email address" id="careerEmail" name="careerEmail">
          </div>
          <!-- Row 2 -->
          <div class="formGroup col--6">
                 <label for="carerPhone">Phone*</label>
            <input type="number" placeholder="Phone" class="form-control phone_number" id="carerPhone" name="carerPhone">

          </div>
          <div class="formGroup col--6">
            <label for="careerRole">Apply For*</label>
            <select class="form-select" name="careerRole" id="careerRole" disabled>
              <option selected>Designing</option>
              <option>Designing</option>
              <option>Receptionist</option>
              <option>Human Resources</option>
              <option>Telecaller</option>
            </select>
          </div>
          <div class="formGroup col--6">
            <label for="careerDesignation">Designation</label>
            <input type="text" class="form-control" placeholder="Product Designer" id="careerDesignation" name="careerDesignation" disabled>
          </div>
          <div class="formGroup col--6">
            <label for="careerExperience">Years of Experience</label>
            <input type="number" class="form-control" placeholder="Enter years of experience" id="careerExperience" name="careerExperience" >
          </div>
     
        <div class="formGroup col--12  w-100">
              <label for="additionalInfo">Additional Information</label>
              <textarea
                id="additionalInfo"
                class="form-control"
                rows="4"
                placeholder="Enter Message"></textarea>

            </div>
       
              <!-- Upload area -->
     <div class="upload-area-container w-100 text-center">
       <div class="upload-area col-12 text-center">
  <input type="file" id="fileUpload" multiple hidden>
        <div class="d-flex">
               <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none"> <path d="M19.2503 7.8752V20.2185C19.2503 22.6569 17.4653 24.8269 15.0387 25.0602C14.3904 25.125 13.7358 25.0531 13.117 24.8491C12.4983 24.6451 11.9292 24.3136 11.4465 23.8761C10.9639 23.4385 10.5784 22.9045 10.3149 22.3087C10.0514 21.7128 9.91589 21.0684 9.91699 20.4169V5.99687C9.91699 4.46854 11.0137 3.0802 12.5303 2.92854C12.9371 2.886 13.3482 2.92948 13.7371 3.05615C14.1259 3.18282 14.4838 3.38984 14.7874 3.66379C15.0911 3.93773 15.3337 4.27247 15.4996 4.64627C15.6655 5.02007 15.7509 5.42458 15.7503 5.83354V18.0835C15.7503 18.7252 15.2253 19.2502 14.5837 19.2502C13.942 19.2502 13.417 18.7252 13.417 18.0835V7.8752C13.417 7.39687 13.0203 7.0002 12.542 7.0002C12.0637 7.0002 11.667 7.39687 11.667 7.8752V17.9202C11.667 19.4485 12.7637 20.8369 14.2803 20.9885C14.6871 21.0311 15.0982 20.9876 15.4871 20.8609C15.8759 20.7343 16.2338 20.5272 16.5374 20.2533C16.8411 19.9793 17.0837 19.6446 17.2496 19.2708C17.4155 18.897 17.5009 18.4925 17.5003 18.0835V6.03187C17.5003 3.59354 15.7153 1.42354 13.2887 1.1902C12.6406 1.12672 11.9865 1.19954 11.3683 1.40399C10.7502 1.60844 10.1816 1.93998 9.69923 2.37731C9.21685 2.81464 8.83132 3.34807 8.56743 3.94331C8.30355 4.53855 8.16715 5.18243 8.16699 5.83354V20.1485C8.16699 23.4969 10.617 26.4952 13.9537 26.8102C17.792 27.1602 21.0003 24.1735 21.0003 20.4169V7.8752C21.0003 7.39687 20.6037 7.0002 20.1253 7.0002C19.647 7.0002 19.2503 7.39687 19.2503 7.8752Z" fill="black"/> </svg>
                <div class="text d-flex flex-wrap">
                  <label for="fileUpload" class="upload-box">
                    Add an attachment*
                  </label>
                  <div class="file-info w-100 d-flex">Max. 10 MB (Type: pdf, doc, png, jpeg, docx)</div>

                </div>

              </div>
      </div>
     </div>

    <!-- Uploaded files list (static HTML for now) -->
    <div class="uploaded-files d-flex flex-wrap justify-content-between w-100"></div>

          <div class="formGroup col-12">
            <div class="form-check ">
              <input class="form-check-input" type="checkbox" id="privacy">
              <label class="form-check-label" for="privacy">
                I have read the <a href="#">privacy policy</a> and consent to the processing of my data for the purpose of handling my enquiry
              </label>
            </div>
          </div>

          <!-- Actions -->
          <div class="d-flex justify-content-end buttonGroup p-0 w-100">
            <button type="submit" class="btn theme-btn d-flex sub-btn align-items-center">
              Submit <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
  <path d="M3.75 10H16.25M16.25 10L11.5625 5M16.25 10L11.5625 15" stroke="white" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
            </button>
    
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- <script>
  const fileInput = document.getElementById("resumeUpload");
  const fileName = document.getElementById("fileName");

  fileInput.addEventListener("change", function () {
    if (this.files.length > 0) {
      fileName.textContent = this.files[0].name;
    } else {
      fileName.textContent = "";
    }
  });
</script> -->
