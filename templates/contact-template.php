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
          <img class="relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-page-image.png"
            class="w-full">
        </div>
        <div class="lg:w-[488px] w-full text-white pt-[32px] lg:pb-[72px] relative">
          <div class="form-main-wrap relative">
            <form id="contactForm" class="mt-[36px]">
              <h1 class="md:text-[64px] text-[52px] text-white">Get in touch.</h1>
              <p class="mt-[8px] text-[16px] font-tertiary mb-[36px] ">Media enquiries? Business plays? Reach out today.
              </p>
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

            <div class="submit-message" style="display: none; margin-top: 1rem;">
              Thank you for your submission.
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>


</main>

<script>
  setTimeout(() => {
    const forms = document.querySelectorAll(`#contactForm`);

    forms.forEach(form => {
      form.onsubmit = async (e) => {
        e.preventDefault();

        const formData = new FormData(e.target);

        const data = {
          firstname: formData.get('full_name'),
          email: formData.get('email'),
          message: formData.get('message'),
        }

        const OFFICE_ID = "48534028"
        const FORM_ID = "4c8875d2-1c10-45da-8416-0f3c7c462d85"

        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
          event: "formSubmissionSucess",
          step: "complete",

          user_name: data.firstname,
          user_email: data.email,

          eventCategory: "Form Submission",
          eventAction: "Contact Us",
          eventLabel: "Submitted-" + window.location.pathname,
        });

        if (data.email) {
          await fetch(
            `https://api.hsforms.com/submissions/v3/integration/submit/${OFFICE_ID}/${FORM_ID}`, {
              method: "POST",
              headers: {
                "Content-Type": "application/json",
              },
              body: JSON.stringify({
                fields: window["getHubspotFields"]({
                  ...data,

                  lead_source_description: window.location.href,
                  language_preference: "en",
                  lead_reference: `Website - Contact Us Form`,
                }),
                context: {
                  hutk: window["getCookie"]("hubspotutk"),
                  pageUri: window.location.pathname,
                  pageName: window.document.title,
                },
              }),
            }
          );
        }

        setTimeout(() => {
          form.reset();
          document.querySelector(`.submit-message`).style.display = "block";
        }, 1000)
      }

    })
  }, 0);
</script>


<?php get_footer(); ?>