@extends('frontend.dashboard')
@section('frontend')

        @include('frontend.pages.partials.page-banner', ['title' => "FAQ's"])

        <section class="faq py-60">
            <div class="container">
                <div class="row" id="accordionExample">
                    <div class="col-lg-8">
                        @forelse ($faqs as $key => $item)
                        <div class="faq-block">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#faq{{ $item->id }}" aria-expanded="false" aria-controls="faq{{ $item->id }}">{{ $item->question }}
                            </a>
                            <div id="faq{{ $item->id }}" class="accordion-collapse collapse" aria-labelledby="faq{{ $item->id }}"
                                data-bs-parent="#accordionExample">
                                <p>{{ $item->answer }}</p>
                            </div>
                        </div>
                        @empty
                        <div class="faq-block">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">How do I create an account on this platform?
                            </a>
                            <div id="faq1" class="accordion-collapse collapse" aria-labelledby="faq1"
                                data-bs-parent="#accordionExample">
                                <p>Add FAQ items from the admin panel to show them here.</p>
                            </div>
                        </div>
                        @endforelse
                    </div>
                    <div class="col-lg-4">
                        <h6 class="color-primary mb-8">–––– FAQ Form</h6>
                        <h2 class="mb-32">Ask Any Question <span class="fm-sec">You Want!</span></h2>
                        <form method="post" action="{{ route('faq.ask') }}" class="form-validator">
                            @csrf
                            <div class="mb-24">
                                <input type="text" class="form-control p_lg" id="name" name="name" required
                                    placeholder="Your Name">
                            </div>
                            <div class="mb-24">
                                <input type="email" class="form-control p_lg" id="email" name="email" required
                                    placeholder="email">
                            </div>
                            <div class="mb-24">
                                <textarea class="form-control p_lg" id="message" name="message" rows="4" required
                                    placeholder="Message"></textarea>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="educate-btn"><span class="educate-btn__curve"></span>Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        @include('frontend.section.Contact')

@endsection
