<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tappengine-afterglow
 */

?>

<footer id="colophon" class="site-footer">
    <div class="container site-footer__container">
        <div class="site-info">
            <div class="site-footer__modal-wrap">
                <a href="/" class="site-footer__logo"><img
                            src="/wp-content/themes/tappengine-afterglow/assets/img/logo-footer.svg" alt=""></a>
                <p>TAPP Engine, Inc. is not a Broker/Dealer, SEC Registered or Investment Advisor or an FDIC Insured
                    Bank.</p>
                <p>Brokerage, and Clearing services are offered through TAPP Clear LLC dba Velocity clearing, LLC.,
                    registered with the Securities and Exchange Commission (SEC) and a member of FINRA and SIPC which
                    protects securities customers of its members up to $500,000 (including $250,000 for claims for
                    cash).</p>
                <p>Explanatory brochure available upon request or at <a target="_blank" href="https://www.sipc.org/">www.sipc.org.</a></p>
                <p class="mt-0">Additional information about your broker can be found by <a target="_blank" href="https://velocityclearingllc.com/">clicking
                        here.</a></p>
                <button class="modal-toggle site-footer__btn-read-more">Read More <img
                            src="/wp-content/themes/tappengine-afterglow/assets/img/read-more-icon.svg" alt=""></button>
            </div>
            <div class="site-footer__nav-wrap">
                <div class="site-footer__nav">
                    <?php wp_nav_menu(array('theme_location' => 'footer_menu', 'menu_class' => 'nav-menu')); ?>
                </div>
                <ul class="site-footer__contact">
<!--                    <li><img src="/wp-content/themes/tappengine-afterglow/assets/img/icon-location.svg" alt="">33 Broad-->
<!--                        Street, Suite 1100-->
<!--                        Boston, MA 02109-->
<!--                    </li>-->
                    <li><img src="/wp-content/themes/tappengine-afterglow/assets/img/icon-mail.svg" alt="">Email:<a
                                href="mailto:info@tappengine.com"> info@tappengine.com</a></li>
                </ul>
            </div>
        </div>
        <div class="sub-footer site-info">
            <div class="all-right">2021 TAPP Engine, Inc. All rights reserved.</div>
            <div class="site-footer__nav-wrap">
                <div class="site-footer__soc">
                    <a target="_blank" href="https://twitter.com/tapppengine"><img src="/wp-content/themes/tappengine-afterglow/assets/img/twitter.svg" alt=""></a>
                    <a target="_blank" href="https://www.linkedin.com/company/tappengine"><img src="/wp-content/themes/tappengine-afterglow/assets/img/in.svg" alt=""></a>
                </div>
                <div class="site-footer__policy">
                    <a target="_blank" href="/terms-of-use/">Terms Of Service</a>
                    <a target="_blank" href="/privacy-statement/">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>
    <img class="bg-footer" src="/wp-content/themes/tappengine-afterglow/assets/img/footer-bg.svg" alt="">
</footer><!-- #colophon -->
<div class="modal">
    <div class="modal-overlay modal-toggle"></div>
    <div class="modal-wrapper modal-transition">
        <button class="modal-close modal-toggle">
            <img src="/wp-content/themes/tappengine-afterglow/assets/img/close-modal-icon.svg" alt="">
        </button>
        <div class="modal-body">
            <div class="modal-content">
                <p>Brokerage, and Clearing services are offered through TAPP Clear, LLC. dba Velocity clearing, LLC.,
                    registered with the Securities and Exchange Commission (SEC) and a member of FINRA and SIPC which
                    protects securities customers of its members up to $500,000 (including $250,000 for claims for
                    cash). Explanatory brochure available upon request or at<a href="https://www.sipc.org">www.sipc.org.</a> Additional information about
                    your broker can be found by <a href="https://brokercheck.finra.org/">clicking here.</a></p>

                <p>Digital Investment/Robo Advisor is offered through TAPP Engine Advisor, LLC. TAPP Engine
                    Advisors, LLC is an investment adviser is registered with the Securities and Exchange Commission
                    (SEC). Registration of an investment adviser does not imply any specific level of skill or
                    training and does not constitute an endorsement of the firm by the Commission. TAPP Engine
                    Advisors, LLC only transacts business in states in which it is properly registered or is
                    excluded or exempted from registration. A copy of TAPP Engine Advisors, LLC ’s current written
                    disclosure brochure filed with the SEC which discusses among other things, TAPP Engine Advisors,
                    LLC’s business practices, services and fees, is available through the SEC’s website at:
                    <a href="https://www.adviserinfo.sec.gov">www.adviserinfo.sec.gov.</a></p>

                <p> Digital Banking solution is offered through WealthCabinet® Digital Banking Solutions, a wholly owned
                    subsidiary of TAPP Engine, Inc. WealthCabinet® is not a member of the Federal Deposit Insurance
                    Corporation. Banking services and Branded Debit Card will be provided by FDIC-member Bank partners.
                    Debit Card services are provided by Bank partners in pursuant to license by Mastercard International
                    Incorporated and may be used everywhere Mastercard debit cards are accepted. </p>

                <p>Investing in securities involves risks, and there is always the potential of losing money when you
                    invest in securities. Past performance, historical returns, future projections, and statistical
                    forecasts are no guarantee of future returns or future performance. The company reserves the right
                    to monitor and retain all incoming and outgoing communications as permitted by applicable law.
                    Nothing provided on this site constitutes tax advice. Individuals should seek the advice of their
                    own tax advisor for specific information regarding tax consequences of investments. </p>

                <p>This property and any marketing on the property are provided by TAPP Engine, Inc. Google Play and
                    the Google Play logo are trademarks of Google, Inc. Apple, the Apple logo, and iPhone are trademarks
                    of Apple, Inc., registered in the U.S. Any links provided to other websites are offered as a matter
                    of convenience and are not intended to imply that TAPP Engine or its authors endorse, sponsor,
                    promote, and/or are affiliated with the owners of or participants in those sites, or endorses any
                    information contained on those sites, unless expressly stated otherwise. </p>
                <p>This website is for informational purposes only and does not constitute an offer to sell, a
                    solicitation to buy, or a recommendation for any security, nor does it constitute an offer to
                    provide investment advisory or other services by the TAPP Engine, Inc. or many of its affiliates,
                    subsidiaries, officers, directors or employees. Nothing in this website shall be considered a
                    solicitation or offer to buy or sell any security, future, option or other financial instrument or
                    to offer or provide any investment advice or service to any person in any jurisdiction. Nothing
                    contained in this website constitutes investment advice or offers any opinion with respect to the
                    suitability of any security, and the information set forth on this website should not be taken as
                    advice to buy, sell or hold any security. In preparing the information contained in this website, we
                    have not considered the investment needs, objectives and financial circumstances of any particular
                    investor or issuer. This information has no regard to the specific investment objectives, financial
                    situation and particular needs of any specific recipient of this information. All information is
                    subject to possible correction. Information may quickly become unreliable for various reasons,
                    including changes in market conditions or economic circumstances.</p>
                <p>@2021 TAPP Engine, Inc. All rights reserved.</p>
            </div>
        </div>
    </div>
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
