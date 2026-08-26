<section class="enroll-section py-60" id="enroll">
      <div class="container">
        <div class="section-title mb-48">
          <div class="heading">
            <h6 class="color-primary mb-8">–––– Enroll Now</h6>
            <h2>Start Learning Today,<br> Fill The Form & <span class="fm-sec">Enroll!</span></h2>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-5 mb-32 mb-lg-0">
            <p class="mb-32">Share your details and the course you want. Our team will contact you to complete your enrollment.</p>
            <div class="about__card mb-24 wow fadeInLeft" data-wow-delay="200ms">
              <div class="about__card__icon">
                <img src="{{ asset('frontend/assets/media/icons/Check-mark.png') }}" alt="Expert teachers">
              </div>
              <div class="about__card__content">
                <h5 class="mb-4p">Expert Teachers</h5>
                <p>Learn from dedicated instructors with real classroom experience.</p>
              </div>
            </div>
            <div class="about__card mb-24 wow fadeInLeft" data-wow-delay="400ms">
              <div class="about__card__icon">
                <img src="{{ asset('frontend/assets/media/icons/Clock.png') }}" alt="Flexible schedule">
              </div>
              <div class="about__card__content">
                <h5 class="mb-4p">Flexible Schedule</h5>
                <p>Study online at your own pace with lifetime access to lessons.</p>
              </div>
            </div>
            <div class="about__card wow fadeInLeft" data-wow-delay="600ms">
              <div class="about__card__icon">
                <img src="{{ asset('frontend/assets/media/icons/Support.png') }}" alt="Support">
              </div>
              <div class="about__card__content">
                <h5 class="mb-4p">24/7 Support</h5>
                <p>Get help whenever you need it while you complete your course.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="join_form_block enroll-form-card wow fadeInRight" data-wow-delay="300ms">
              <h4 class="mb-8">Enrollment Form</h4>
              <p class="mb-24">Fill in your information to enroll in a course.</p>
              <form id="enroll-form" class="enroll-form">
                <div class="row">
                  <div class="col-md-6 mb-16">
                    <input type="text" name="name" class="form-control p_lg" placeholder="Full Name" required>
                  </div>
                  <div class="col-md-6 mb-16">
                    <input type="email" name="email" class="form-control p_lg" placeholder="Email Address" required>
                  </div>
                  <div class="col-md-6 mb-16">
                    <input type="tel" name="phone" class="form-control p_lg" placeholder="Phone Number" required>
                  </div>
                  <div class="col-md-6 mb-16">
                    <select name="course" class="form-control p_lg" required>
                      <option value="" disabled selected>Select Course</option>
                      <option value="photoshop">Photoshop Course</option>
                      <option value="artificial-intelligence">Artificial Intelligence</option>
                      <option value="web-design">Web Design Course</option>
                      <option value="figma">Figma Course</option>
                      <option value="illustrator">Illustrator Course</option>
                      <option value="after-effects">After Effects Course</option>
                    </select>
                  </div>
                  <div class="col-12 mb-24">
                    <textarea name="message" class="form-control p_lg" rows="4" placeholder="Your Message (optional)"></textarea>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="educate-btn"><span class="educate-btn__curve"></span>Enroll Now</button>
                  </div>
                </div>
              </form>
              <p class="enroll-success" id="enroll-success" hidden>Thank you! Your enrollment request has been received.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
