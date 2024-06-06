<!-- Footer -->
<footer style="background-color: #343a40; color: #f8f9fa; padding: 60px 20px; text-align: center; position: relative;margin-top:60px">
     
    <div style="position: absolute; top: 0; left: 0; width: 100%; overflow: hidden; line-height: 0;" id="footerWave">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none" style="position: relative; display: block; width: calc(132% + 1.3px); height: 100px;" id="white">
        <path d="M0,0V46.29c47.31,21.91,98.33,31.13,148.17,34,75.93,4.72,147.62-16.84,223.12-29.52C453.11,33.9,532.63,47.9,607,53.64c68.17,5.29,136.23-9.3,200-24.3,87.22-20.72,172.28-46.21,261-51.8,50.24-3.23,99.71,1.27,148.17,12.58,48.88,11.41,95.9,29.35,142.14,42.27,30.43,8.38,62.77,16.2,94.68,20.22V0Z" opacity=".25" style="fill: #F6F5F2;"></path>
        <path d="M0,0V15.81C47.31,35,98.33,42.82,148.17,45.69c75.93,4.72,147.62-16.84,223.12-29.52,81.82-14.63,161.34-1.58,235.71,4.16,68.17,5.29,136.23-9.3,200-24.3,87.22-20.72,172.28-46.21,261-51.8,50.24-3.23,99.71,1.27,148.17,12.58,48.88,11.41,95.9,29.35,142.14,42.27,30.43,8.38,62.77,16.2,94.68,20.22V0Z" opacity=".5" style="fill: #F6F5F2;"></path>
        <path d="M0,0V5.63C47.31,24.91,98.33,31.13,148.17,34c75.93,4.72,147.62-16.84,223.12-29.52C453.11,21.9,532.63,35.9,607,41.64c68.17,5.29,136.23-9.3,200-24.3,87.22-20.72,172.28-46.21,261-51.8,50.24-3.23,99.71,1.27,148.17,12.58,48.88,11.41,95.9,29.35,142.14,42.27,30.43,8.38,62.77,16.2,94.68,20.22V0Z" style="fill: #F6F5F2;"></path>
        </svg>

        <svg  viewBox="0 0 1200 120" preserveAspectRatio="none" style="position: relative; display: none; width: calc(132% + 1.3px); height: 100px;" id="black">
            <path d="M0,0V46.29c47.31,21.91,98.33,31.13,148.17,34,75.93,4.72,147.62-16.84,223.12-29.52C453.11,33.9,532.63,47.9,607,53.64c68.17,5.29,136.23-9.3,200-24.3,87.22-20.72,172.28-46.21,261-51.8,50.24-3.23,99.71,1.27,148.17,12.58,48.88,11.41,95.9,29.35,142.14,42.27,30.43,8.38,62.77,16.2,94.68,20.22V0Z" opacity=".25" style="fill: #1D2125;"></path>
            <path d="M0,0V15.81C47.31,35,98.33,42.82,148.17,45.69c75.93,4.72,147.62-16.84,223.12-29.52,81.82-14.63,161.34-1.58,235.71,4.16,68.17,5.29,136.23-9.3,200-24.3,87.22-20.72,172.28-46.21,261-51.8,50.24-3.23,99.71,1.27,148.17,12.58,48.88,11.41,95.9,29.35,142.14,42.27,30.43,8.38,62.77,16.2,94.68,20.22V0Z" opacity=".5" style="fill: #1D2125;"></path>
            <path d="M0,0V5.63C47.31,24.91,98.33,31.13,148.17,34c75.93,4.72,147.62-16.84,223.12-29.52C453.11,21.9,532.63,35.9,607,41.64c68.17,5.29,136.23-9.3,200-24.3,87.22-20.72,172.28-46.21,261-51.8,50.24-3.23,99.71,1.27,148.17,12.58,48.88,11.41,95.9,29.35,142.14,42.27,30.43,8.38,62.77,16.2,94.68,20.22V0Z" style="fill: #1D2125;"></path>
        </svg>
    </div>

    <div style="max-width: 1200px; margin: 0 auto; padding-top: 60px; position: relative; z-index: 1; ">
        <!-- Top Section -->
        <div style="display: flex; flex-wrap: wrap; justify-content: space-between; margin-bottom: 50px; text-align: left;">
            <!-- About and Logo -->
            <div style="flex: 1; min-width: 300px; margin-bottom: 30px; ">
                <img src="{{ asset('./img/Senza titolo-1.png') }}" alt="Presto.it Logo" style="max-width: 250px; margin-bottom: 20px;">
                <p style="font-size: 16px; line-height: 1.6; color: #ced4da;">
                    Presto.it velocità ed efficienza. Scopri i nostri servizi e unisciti alla nostra comunità di utenti soddisfatti.
                </p>
            </div>
            <!-- Team Members -->
            <div style="flex: 1; min-width: 300px; margin-bottom: 40px;"  class="footer-col ms-3">
                <h4 style="font-size: 22px; color: #f8f9fa; margin-bottom: 35px; margin-left: 200px">      {{__('ui.footer_description_team') }}</h4>
                <ul style="list-style: none; padding: 0; font-size: 16px; line-height: 1.6; color: #ced4da;margin-left:190px">
                    <li>Agostino Di Bartolomeo</li>
                    <li>Riccardo Cardia</li>
                    <li>Marco Motolese</li>
                    <li>Leonardo Rauco</li>
                </ul>
            </div>
            <!-- Social Media Links -->
            <div style="flex: 1; min-width: 300px; margin-bottom: 30px;" class="footer-col">
                <h4 style="font-size: 22px; color: #f8f9fa; margin-bottom: 15px; margin-left:80px;">      {{__('ui.footer_description_social') }}</h4>
                <div class="social-links ">
                    <a href="#" target="_blank" style="margin-left: 60px;" class="fab fa-facebook-f">
                      
                    </a>
                    <a href="#" target="_blank" style="margin-right: 10px; " class="fab fa-twitter">
                       
                    </a>
                    <a href="#" target="_blank" style="margin-right: 10px;"  class="fab fa-instagram">
                    
                    </a>
                    <a href="#" target="_blank"  style="margin-right: 10px;" class="fab fa-linkedin">
                   
                    </a>
                </div>
            </div>
        </div>

        <!-- Middle Section -->
        <div style="display: flex; flex-wrap: wrap; justify-content: space-between; margin-bottom: 50px; text-align: left;" class="footer-col">
            <!-- Navigation Links 
            <div style="flex: 1; min-width: 300px; margin-bottom: 30px;">
                <h4 style="font-size: 22px; color: #f8f9fa; margin-bottom: 15px;">{{__('ui.footer_description_navigation') }}</h4>
                <ul style="list-style: none; padding: 0; font-size: 16px; line-height: 1.6; color: #ced4da;">
                    <li><a href="/chi-siamo" style=" text-decoration: none;">{{__('ui.footer_description_menu') }}</a></li>
                    <li><a href="/servizi" style=" text-decoration: none;">{{__('ui.footer_description_menu_2') }}</a></li>
                    <li><a href="/contatti" style=" text-decoration: none;">{{__('ui.footer_description_menu_3') }}</a></li>
                    <li><a href="/blog" style=" text-decoration: none;">{{__('ui.footer_description_menu_4') }}</a></li>
                </ul>
            </div>-->
            <!-- Legal Links -->
            <div style="flex: 1; min-width: 300px; margin-bottom: 30px;">
                <h4 style="font-size: 22px; color: #f8f9fa; margin-bottom: 15px;">{{__('ui.footer_description_legal_information') }}</h4>
                <ul style="list-style: none; padding: 0; font-size: 16px; line-height: 1.6; color: #ced4da;">
                    <li><a href="{{route('viewPolicy')}}" style="text-decoration: none;">{{__('ui.footer_description_legal_information_menu') }}</a></li>
                    <li><a href="{{route('viewPolicy')}}" style=" text-decoration: none;">{{__('ui.footer_description_legal_information_menu_2') }}</a></li>
                    <li><a href="{{route('viewPolicy')}}" style=" text-decoration: none;">{{__('ui.footer_description_legal_information_menu_3') }}</a></li>
                </ul>
            </div>
        </div>

        <!-- Newsletter Subscription -->
        <div style="margin-bottom: 50px;">
            <h3 style="font-size: 22px; color: #f8f9fa; margin-bottom: 15px;">{{__('ui.footer_newsletter_text') }}</h3>
            <form action="{{ route('form.newsletter') }}" method="post" style="display: flex; justify-content: center; align-items: center;">
                @csrf
                <input type="email" name="email" placeholder="Inserisci il tuo indirizzo email" required style="padding: 10px 20px; font-size: 16px; border: 1px solid #ced4da; border-radius: 4px; width: 300px; max-width: 100%; margin-right: 10px;" value="{{ auth()->user()->email ?? '' }}">
                <button type="submit" style="padding: 10px 20px; font-size: 16px; color: #fff; background-color: #007bff; border: none; border-radius: 4px; cursor: pointer;">{{__('ui.footer_button') }}</button>
            </form>
        </div>

        <div class=" text-center mb-3">
                   <h3>Fai presto.it</h3>
                   <div class="mt-2">
                   <a class="btn btn-warning" href="{{ route('revisor.form') }}">{{__('ui.works_as_an_auditor') }}</a>
                   </div>
            </div>

        <!-- Footer Bottom -->
        <div style="border-top: 1px solid #e9ecef; padding-top: 20px; font-size: 14px; color: #ced4da;">
            &copy; {{__('ui.footer_reserved') }}
        </div>
    </div>
</footer>
