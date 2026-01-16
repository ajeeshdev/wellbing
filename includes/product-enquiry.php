<div class="modal fade productEnquiryForm" id="productEnquiryForm" aria-hidden="true" aria-labelledby="productEnquiryFormLabel"
    tabindex="-1" role="dialog" aria-modal="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                id="productEnquiryFormClose">
              <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                    <path d="M1.25 15.3933L15.3933 1.25M15.3933 15.3933L1.25 1.25" stroke="black" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
            </button>

            <div class="modal-body p-0">
                <!-- Label used by aria-labelledby -->
                <p class="title " id="productEnquiryFormLabel">
                  Enquire Now
                </p>
          

                <form id="siteEnquiry" action="" method="post" enctype="multipart/form-data"
                    class="d-flex flex-wrap justify-content-between" novalidate>
                  <!-- Row 1 -->
    <div class="formGroup col--6">
      <input type="text" placeholder="Name" class="form-control">
    </div>
    <div class="formGroup col--6">
      <input type="email" placeholder="Email" class="form-control">
    </div>

    <!-- Row 2 -->
    <div class="formGroup col--6">
        <input type="number" placeholder="Phone" class="form-control phone_number" id="phone">

    </div>
    <div class="formGroup col--6">
      <input type="text" placeholder="Company" class="form-control">
    </div>

    <!-- Upload area -->
     <div class="upload-area-container w-100 text-center">
       <div class="upload-area col-12 text-center">
  <input type="file" id="fileUpload" multiple hidden>
         <label for="fileUpload">
           <span class="upload-icon"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
     <path d="M25.5 43.5V27M33 43.5C40.47 43.5 46.5 37.47 46.5 30C46.5 22.53 40.47 16.5 33 16.5C32.37 16.5 31.74 16.59 31.14 16.68C29.85 11.43 25.14 7.5 19.5 7.5C12.87 7.5 7.5 12.87 7.5 19.5C7.5 20.82 7.77 22.05 8.16 23.25C6.1979 24.0166 4.51265 25.3572 3.32447 27.0966C2.13629 28.8361 1.50044 30.8935 1.5 33C1.5 38.79 6.21 43.5 12 43.5H18M18 33L24.45 26.55C25.05 25.95 25.98 25.95 26.58 26.55L33 33" stroke="#ACACAC" stroke-width="3" stroke-linecap="round"/>
   </svg></span>
           <div class="d-flex flex-wrap justify-content-center"><strong>Click to upload</strong> <span>or drag and drop</span>
         </div>
       </label>
      </div>
      <small>Maximum file size 50MB.</small>
     </div>

    <!-- Uploaded files list (static HTML for now) -->
    <div class="uploaded-files d-flex flex-wrap justify-content-between w-100"></div>

    <!-- Message -->
    <textarea placeholder="Message" class="form-control message-box"></textarea>

    <!-- Actions -->
                    <div class="d-flex justify-content-end buttonGroup p-0 w-100">
                        <button type="submit" class="btn theme-btn bgYellow ">
                           Submit
                        </button>
                        <button type="button" class=" btn theme-btn bgCancel " data-bs-dismiss="modal"
                            aria-label="Close" id="productEnquiryFormCancel">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
