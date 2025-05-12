<?php

/**
Template Name: Contact US Page
**/

get_header();

?>

<main>

  <section class="bg-navy overflow-hidden">
    <div class="tb_container">
      <div
        class="flex lg:flex-nowrap lg:flex-row flex-col-reverse flex-wrap items-end gap-[64px] pt-[32px] max-w-[1318px] px-[15px] mx-auto">
        <div class="lg:w-[calc(100%-520px)] relative">
					<div class="contact-person-bg absolute"></div>
          <img class="relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-page-image.png" class="w-full">
        </div>
        <div class="lg:w-[488px] w-full text-white pt-[32px] lg:pb-[72px] relative">
          <div class="form-main-wrap relative">
            <form id="contactForm" class="mt-[36px]">
              <h1 class="md:text-[64px] text-[52px] text-white">Get in touch.</h1>
              <p class="mt-[8px] text-[16px] font-tertiary mb-[36px] ">Media enquiries? Business plays? Reach out today.</p>
              <div class="field-wrap mb-[31px]">
                <label class="field-label ">Full name*</label>
                <input class="input-field" placeholder="Your full name" type="text" name="full-name">
              </div>
              <div class="field-wrap mb-[31px]">
                <label class="field-label">Email*</label>
                <input class="input-field" placeholder="name@example.com" type="email" name="email">
              </div>
              <div class="field-wrap mb-[31px]">
                <label class="field-label">Phone*</label>
                <input class="input-field" placeholder="0400 000 000" type="phone" name="phone">
              </div>
              <div class="field-wrap mb-[24px]">
                <label class="field-label">Enquiry</label>
                <textarea class="input-field !min-h-[128px]" placeholder="Add message..." name="enquiry"></textarea>
              </div>
              <button type="submit" class="btn btn-primary min-w-[155px]">send</button>
            </form>
            <div class="thankMessage text-center hidden absolute left-[50%] top-[50%] translate-[-50%] w-full p-4">
              <h2 class="md:text-[20px] text-[28px] text-white">Thanks for connecting us!</h2>
              <p class="mt-[8px] text-[14px] ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ligula nisi, sodales eu lacinia et, lacinia laoreet dui.</p>
            </div>

          </div>
        </div>
      </div>

    </div>
  </section>


</main>

<script>
document.getElementById('contactForm').addEventListener('submit', function (e) {
  e.preventDefault();

  const form = e.target;
  const formWrap =  document.querySelector('.form-main-wrap')
  const fields = ['full-name', 'email', 'phone', 'enquiry'];
  let isValid = true;

  // Remove any existing error messages
  form.querySelectorAll('.error-message').forEach(el => el.remove());

  fields.forEach(fieldName => {
    const input = form[fieldName];
    const wrapper = input.parentElement;

    let errorMessage = '';

    const value = input.value.trim();

    if (fieldName === 'full-name' && !value) {
      errorMessage = 'Full name is required.';
    }

    if (fieldName === 'email') {
      const emailPattern = /^\S+@\S+\.\S+$/;
      if (!value || !emailPattern.test(value)) {
        errorMessage = 'Valid email is required.';
      }
    }

    if (fieldName === 'phone') {
      const phonePattern = /^\d{10,}$/;
      if (!value || !phonePattern.test(value.replace(/\s+/g, ''))) {
        errorMessage = 'Valid phone number is required.';
      }
    }

    // if (fieldName === 'enquiry' && !value) {
    //   errorMessage = 'Please enter your enquiry.';
    // }

    if (errorMessage) {
      isValid = false;
      input.classList.add('border-red-500'); // Tailwind red border
      const errorEl = document.createElement('p');
      errorEl.className = 'error-message';
      errorEl.textContent = errorMessage;
      wrapper.appendChild(errorEl);
    }
  });

  if (isValid) {
    formWrap.classList.add('sent');
    form.reset();
  }
});
</script>


<?php get_footer();?>