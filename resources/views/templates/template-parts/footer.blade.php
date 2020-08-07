@inject('contactUsForm', \App\Helpers\FormBuilder )
<footer>
    <section class="grid-parent" id="section--footer" data-section-background="color-accent--first">
        <div class="textblock-standard grid-child grid-child--d-3 grid-child--t-3">
            <h4>Contact us</h4>
            <p>Street 10<br />1000 AB, City<br />United States</p>
            <p><a href=""><strong>T.</strong> 0123 456 789</a><br /><a href=""><strong>E.</strong> info@e-mail.com</a></p>
        </div>

        {{ $contactUsForm -> setFormClasses() }}
        {{ $contactUsForm -> setFormUseJavaScriptCheck( true ) }}
        {{ $contactUsForm -> setFormID( 'form-contact' ) }}
        {{ $contactUsForm -> setFormAdditionalClasses( 'grid-child grid-child--d-6 grid-child--t-6' ) }}
        {{ $contactUsForm -> setFormFieldIDAddPrefix( true ) }}
        {{ $contactUsForm -> setFormAction( route( 'home' ) ) }}
        {{ $contactUsForm -> addCSRFField( csrf_token() ) }}
        {{ $contactUsForm -> addHTML( '<h4 class="field--grid-d">Got a question?</h4>' ) }}
        {{ $contactUsForm -> addTextInputField( 'name', 'field--grid-a', '', 'name', '', old( 'name' ), '', 'name', true, __('Name'), 'required:true' ) }}
        {{ $contactUsForm -> addEmailInputField( 'email', 'field--grid-c', '', 'email', '', old( 'email' ), '', 'email', true, __('E-mailadres'), 'required:true;format:email;min-length:8;max-length:40' ) }}
        {{ $contactUsForm -> addTextareaField( 'question', 'field--grid-b', '', 'question', '', old( 'question' ), '', '', true, __('Question'), 'required:true' )}}
        {{ $contactUsForm -> addSubmitButton( 'submit', '', '', 'submit', '', __( 'Ask question' ) ) }}
        {{ $contactUsForm -> renderForm() }}

        <ul class="social-media-standard grid-child grid-child--d-3 grid-child--t-3">
            <h4>Follow us on social media</h4>
            <li>
                <a href="//www.twitter.com" target="_blank">T</a>
            </li>
            <li>
                <a href="//www.facebook.com" target="_blank">F</a>
            </li>
            <li>
                <a href="//www.instagram.com" target="_blank">I</a>
            </li>
        </ul>
    </section>
</footer>
</body>
</html>
