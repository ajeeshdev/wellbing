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
        <p class="heading " id="careerFormLabel">
          We See You, Not Your CV!
        </p>


        <form id="siteEnquiry" action="" method="post" enctype="multipart/form-data"
          class="d-flex flex-wrap justify-content-between" novalidate>
          <!-- Row 1 -->
          <div class="formGroup col--6">
            <input type="text" class="form-control" placeholder="Name">
          </div>
          <div class="formGroup col--6">
            <input type="text" class="form-control" placeholder="Last Name">
          </div>
          <div class="formGroup col--6">
            <input type="email" class="form-control" placeholder="Email">
          </div>
          <!-- Row 2 -->
          <div class="formGroup col--6">
            <input type="number" placeholder="Phone" class="form-control phone_number" id="phone">

          </div>
          <div class="formGroup col--6">
            <select class="form-select">
              <option selected>Country</option>
              <option>India</option>
              <option>UAE</option>
              <option>USA</option>
            </select>
          </div>
          <div class="formGroup col--6">
            <select class="form-select">
              <option selected>State</option>
            </select>
          </div>
          <div class="formGroup col--6">
            <input type="text" class="form-control" placeholder="Place">

          </div>
          <div class="formGroup col--6">
            <select class="form-select">
              <option selected>Apply for</option>
            </select>
          </div>
          <div class="formGroup col--6">
            <select class="form-select">
              <option selected>Designation</option>
            </select>
          </div>
          <div class="formGroup col--6">
            <input type="text" class="form-control" placeholder="Experience">
          </div>
        <div class="formGroup col-12">
  <textarea
    id="additionalInfo"
    class="form-control"
    rows="4"
    placeholder="Additional Information"></textarea>

  <div class="word-count">
    <span id="wordRemaining">1000</span> / 1000 Words
  </div>
</div>


          <div class="formGroup col-12">
            <div class="custom-upload">
              <input type="file" id="resumeUpload" name="resume" hidden>
              <div class="d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M10 9V14C10 14.5304 10.2107 15.0391 10.5858 15.4142C10.9609 15.7893 11.4696 16 12 16C12.5304 16 13.0391 15.7893 13.4142 15.4142C13.7893 15.0391 14 14.5304 14 14V7C14 5.93913 13.5786 4.92172 12.8284 4.17157C12.0783 3.42143 11.0609 3 10 3C8.93913 3 7.92172 3.42143 7.17157 4.17157C6.42143 4.92172 6 5.93913 6 7V15C6 16.5913 6.63214 18.1174 7.75736 19.2426C8.88258 20.3679 10.4087 21 12 21C13.5913 21 15.1174 20.3679 16.2426 19.2426C17.3679 18.1174 18 16.5913 18 15V5" stroke="#0A1119" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="text">
                  <label for="resumeUpload" class="upload-box">
                    Add an attachment*
                  </label>
                  <div class="file-info">Max. 10 MB (Type: pdf, doc, png, jpeg, docx)</div>

                </div>

              </div>


              <div id="fileName" class="selected-file"></div>
            </div>


          </div>
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
            <button type="submit" class="btn theme-btn bgYellow ">
              Submit
            </button>
            <button type="button" class=" btn theme-btn bgCancel " data-bs-dismiss="modal" aria-label="Close"
              id="careerFormCancel">
              Cancel
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  const fileInput = document.getElementById("resumeUpload");
  const fileName = document.getElementById("fileName");

  fileInput.addEventListener("change", function () {
    if (this.files.length > 0) {
      fileName.textContent = this.files[0].name;
    } else {
      fileName.textContent = "";
    }
  });
</script>
<script>
  const textarea = document.getElementById("additionalInfo");
  const remainingEl = document.getElementById("wordRemaining");
  const MAX_WORDS = 1000;

  function getWordCount(text) {
    return text
      .trim()
      .split(/\s+/)
      .filter(word => word.length > 0).length;
  }

  textarea.addEventListener("input", () => {
    const text = textarea.value;
    let words = getWordCount(text);

    if (words > MAX_WORDS) {
      const trimmed = text
        .trim()
        .split(/\s+/)
        .slice(0, MAX_WORDS)
        .join(" ");
      textarea.value = trimmed;
      words = MAX_WORDS;
    }

    remainingEl.textContent = MAX_WORDS - words;
  });
</script>
