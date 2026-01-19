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
                <p class="title h3" id="productEnquiryFormLabel">
                  Enquire Now
                </p>
              <form id="siteEnquiry"
                    action=""
                    method="post"
                    class="d-flex flex-wrap justify-content-between"
                    novalidate>

                  <!-- Name -->
                  <div class="formGroup col--6">
                      <label for="name">Name</label>
                      <input type="text"
                            id="name"
                            name="name"
                            placeholder="Enter your name"
                            class="form-control"
                            required>
                      <span class="error-message" data-error-for="name"></span>
                  </div>

                  <!-- Email -->
                  <div class="formGroup col--6">
                      <label for="email">Email</label>
                      <input type="email"
                            id="email"
                            name="email"
                            placeholder="Enter your email"
                            class="form-control"
                            required>
                      <span class="error-message" data-error-for="email"></span>
                  </div>

                  <!-- Phone -->
                  <div class="formGroup col--6">
                      <label for="phone">Phone</label>
                      <input type="tel"
                            id="phone"
                            name="phone"
                            placeholder="Enter your phone"
                            class="form-control phone_number"
                            required>
                      <span class="error-message" data-error-for="phone"></span>
                  </div>

                  <!-- Product -->
                  <div class="formGroup col--6">
                      <label for="product">Product</label>
                      <input type="text"
                            id="product"
                            name="product"
                            class="form-control"
                            value="Product Name1"
                            readonly>
                      <span class="error-message" data-error-for="product"></span>
                  </div>

                  <!-- Message -->
                  <div class="formGroup col--12 w-100">
                      <label for="message">Message</label>
                      <textarea id="message"
                                name="message"
                                placeholder="Message"
                                class="form-control message-box"
                                rows="4"
                                required></textarea>
                      <span class="error-message" data-error-for="message"></span>
                  </div>

                  <!-- Actions -->
                  <div class="d-flex justify-content-end buttonGroup p-0 w-100">
                      <button type="submit" class="btn theme-btn bgYellow">
                          Submit
                      </button>
                      <button type="button"
                              class="btn theme-btn bgCancel"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                              id="productEnquiryFormCancel">
                          Cancel
                      </button>
                  </div>
              </form>


            </div>
        </div>
    </div>
</div>


<script>
document.getElementById('siteEnquiry').addEventListener('submit', function (e) {
    e.preventDefault(); // stop form submit

    let hasError = false;

    // clear old errors
    document.querySelectorAll('.error-message').forEach(el => el.textContent = '');

    const fields = [
        { id: 'name', message: 'Name is required' },
        { id: 'email', message: 'Valid email is required' },
        { id: 'phone', message: 'Phone number is required' },
        { id: 'message', message: 'Message is required' }
    ];

    fields.forEach(field => {
        const input = document.getElementById(field.id);
        const error = document.querySelector(`[data-error-for="${field.id}"]`);

        if (!input.value.trim()) {
            error.textContent = field.message;
            input.classList.add('is-invalid');
            hasError = true;
        } else {
            input.classList.remove('is-invalid');
        }
    });

    // email format check (basic, not stupid)
    const email = document.getElementById('email');
    const emailError = document.querySelector('[data-error-for="email"]');
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email.value && !emailRegex.test(email.value)) {
        emailError.textContent = 'Enter a valid email address';
        email.classList.add('is-invalid');
        hasError = true;
    }

    if (!hasError) {
        this.submit(); // submit only if valid
    }
});
</script>
