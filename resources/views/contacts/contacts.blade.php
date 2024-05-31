<x-layout> 
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto pt-4">
                <h1>{{__('ui.support_page') }}</h1>
                <p class="lead text-3">{{__('ui.support_page_text') }}</p>

                <x-success />

                <x-error />
                
                <form action="{{ route('contacts.send') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="label-control fs-5 mb-2" for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="label-control fs-5 mb-2" for="message">{{__('ui.support_page_message') }}</label>
                            <textarea name="message" id="message" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn-custom btn-primary">{{__('ui.support_page_button') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout> 