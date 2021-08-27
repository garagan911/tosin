    <?php
    /**
     * front-page.php
     *
     * the front page template
     *
     *
     *
     * @package theprofs
     *
     */
    ?>

<?php get_header() ?>

    <section id="fixed-top" class="business-needs" role="main">
        <img class="bg-top" src="/wp-content/themes/tappengine-afterglow/assets/img/bg-top.svg" alt="">
        <img class="bg-right" src="/wp-content/themes/tappengine-afterglow/assets/img/bg-right.svg" alt="">
        <div class="container business-needs__container">
            <div class="business-needs__row">
                <div class="business-needs__top-wrap">
                    <h1 class="business-needs__title">Consume what your business needs</h1>
                    <p class="business-needs__caption">SaaS Open Brokerage and Digital Banking Infrastructure Solutions
                        for
                        Financial Institutions</p>
                    <div class="business-needs__form">
                        <?php echo do_shortcode('[contact-form-7 id="359" title="get-email"]'); ?>
                    </div>
                </div>
                <div class="business-needs__group-icons">
                    <img class="business-needs__logos"
                         src="/wp-content/themes/tappengine-afterglow/assets/img/vector-top.svg" alt="">
                    <div class="business-needs__group-icon icon-1">
                        <!--                        <img src="/wp-content/themes/tappengine-afterglow/assets/img/Group 46256.svg" alt="">-->
                        <svg width="77" height="77" viewBox="0 0 77 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect id="anim1" x="1.30921" y="1.30921" width="74.1447" height="74.1447" rx="17.2697"
                                  stroke="#B7BAD1" stroke-width="1.38158" stroke-dasharray="4.61 4.61"/>
                            <rect x="5.16602" y="5.16699" width="65.9995" height="65.9995" rx="13.8158" fill="#11142D"/>
                            <path d="M44.6222 34.9143C44.6222 30.5175 40.0165 27 34.3336 27C28.6507 27 24.0011 30.5394 24.0011 34.9143C24.0256 36.6151 24.6979 38.2426 25.8807 39.465C25.4263 40.4447 24.83 41.3522 24.111 42.1581C24.057 42.214 24.0207 42.2846 24.0066 42.3611C23.9925 42.4376 24.0012 42.5165 24.0317 42.588C24.0622 42.6595 24.1131 42.7205 24.178 42.7633C24.2429 42.8061 24.319 42.8288 24.3968 42.8286C25.9476 42.8188 27.4669 42.3896 28.7936 41.5865C30.5079 42.4113 32.3872 42.836 34.2896 42.8286C40.0165 42.8286 44.6222 39.2891 44.6222 34.9143Z"
                                  fill="white"/>
                            <path d="M50.6551 45.7742C51.8489 44.5642 52.5367 42.9448 52.5787 41.2455C52.5787 37.9479 49.9296 35.101 46.1813 33.9248C46.2259 34.2527 46.2479 34.5832 46.2473 34.9141C46.2473 40.1573 40.9161 44.4112 34.3758 44.4112C33.8468 44.4067 33.3184 44.3737 32.793 44.3123C34.3538 47.1592 38.0142 49.1598 42.2791 49.1598C44.1821 49.1726 46.0626 48.7477 47.7751 47.9177C49.1019 48.7208 50.6212 49.15 52.172 49.1598C52.2492 49.1581 52.3242 49.1344 52.3885 49.0916C52.4527 49.0488 52.5034 48.9886 52.5347 48.918C52.5652 48.8468 52.5742 48.7683 52.5605 48.6921C52.5468 48.6159 52.5111 48.5454 52.4578 48.4893C51.7253 47.6789 51.1177 46.7638 50.6551 45.7742Z"
                                  fill="white"/>
                        </svg>
                        <div>Integrated Digital Advisor</div>
                    </div>
                    <div class="business-needs__group-icon icon-2">
                        <!--                        <img src="/wp-content/themes/tappengine-afterglow/assets/img/Group 46248.svg" alt="">-->
                        <svg width="77" height="77" viewBox="0 0 77 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="6.08594" y="5.16699" width="65.9995" height="65.9995" rx="13.8158" fill="#11142D"/>
                            <rect id="anim2" x="1.30921" y="1.30921" width="74.1447" height="74.1447" rx="17.2697"
                                  stroke="#B7BAD1" stroke-width="1.38158" stroke-dasharray="4.61 4.61"/>
                            <path d="M22.2617 29.6318V34.6017C23.0077 34.6015 23.7463 34.7483 24.4355 35.0336C25.1247 35.319 25.7509 35.7374 26.2784 36.2648C26.8059 36.7923 27.2242 37.4185 27.5096 38.1077C27.795 38.7969 27.9417 39.5356 27.9415 40.2815V46.6713H33.6214V40.2815C33.6214 38.7751 34.2198 37.3304 35.285 36.2653C36.3501 35.2001 37.7948 34.6017 39.3012 34.6017C40.8076 34.6017 42.2523 35.2001 43.3174 36.2653C44.3826 37.3304 44.981 38.7751 44.981 40.2815V46.6713H50.6608V40.2815C50.6606 39.5356 50.8074 38.7969 51.0928 38.1077C51.3782 37.4185 51.7965 36.7923 52.324 36.2648C52.8514 35.7374 53.4777 35.319 54.1669 35.0336C54.8561 34.7483 55.5947 34.6015 56.3407 34.6017V29.6318H22.2617Z"
                                  fill="white"/>
                        </svg>
                        <div>Infrastructure</div>
                    </div>
                    <div class="business-needs__group-icon icon-3">
                        <!--                        <img src="/wp-content/themes/tappengine-afterglow/assets/img/Group 46246.svg" alt="">-->
                        <svg width="77" height="77" viewBox="0 0 77 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="5.16602" y="4.7627" width="66.4032" height="66.4032" rx="13.8158" fill="#11142D"/>
                            <rect id="anim3" x="1.30921" y="1.30921" width="74.1447" height="74.1447" rx="17.2697"
                                  stroke="#B7BAD1" stroke-width="1.38158" stroke-dasharray="4.61 4.61"/>
                            <path d="M51.2444 41.9854H47.076V38.7916C47.076 38.1659 46.6298 37.6566 46.0838 37.6566H38.5026V34.5019H42.6722C43.6326 34.5019 44.4152 33.7199 44.4152 32.7593V27.416C44.4152 26.4536 43.6332 25.6719 42.6722 25.6719H33.1706C32.2094 25.6719 31.4277 26.4536 31.4277 27.416V32.759C31.4277 33.7196 32.2094 34.5016 33.1706 34.5016H37.3402V37.6563H29.8261C29.2422 37.6563 28.768 38.1671 28.768 38.7913V41.9848H24.5984C23.6372 41.9848 22.8555 42.7668 22.8555 43.729V49.0725C22.8555 50.0329 23.6369 50.8146 24.5984 50.8146H34.0994C35.0601 50.8146 35.843 50.0329 35.843 49.0725V43.7296C35.843 42.7671 35.0607 41.9854 34.0994 41.9854H29.8303L29.8261 38.8192H45.913V41.9854H41.7434C40.7819 41.9854 40.0005 42.7671 40.0005 43.7296V49.0728C40.0005 50.0332 40.7819 50.8152 41.7434 50.8152H51.2444C52.2048 50.8152 52.988 50.0332 52.988 49.0728V43.7296C52.988 42.7671 52.206 41.9854 51.2444 41.9854Z"
                                  fill="white"/>
                        </svg>
                        <div>Clearing and Custody API</div>
                    </div>
                    <div class="business-needs__group-icon icon-4">
                        <svg width="77" height="77" viewBox="0 0 77 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="5.16602" y="4.7627" width="66.4032" height="66.4032" rx="13.8158" fill="#11142D"/>
                            <path d="M50.8929 43.3199L47.0034 41.8682L39.553 44.6347C39.1422 44.7716 38.6765 44.8812 38.2383 44.8812C37.7726 44.8812 37.3344 44.799 36.9235 44.6347L29.4731 41.8682L25.5836 43.3199C25.118 43.4842 25.118 44.1416 25.5836 44.3334L37.6083 48.7707C38.0191 48.9077 38.4574 48.9077 38.8683 48.7707L50.8929 44.3334C51.3586 44.1416 51.3586 43.4842 50.8929 43.3199Z"
                                  fill="white"/>
                            <path d="M50.8929 37.3209L47.0034 35.8691L39.553 38.6082C39.1422 38.7726 38.6765 38.8548 38.2383 38.8548C37.7726 38.8548 37.3344 38.7726 36.9235 38.6082L29.4731 35.8691L25.5836 37.3209C25.118 37.4852 25.118 38.1426 25.5836 38.3343L37.6083 42.7443C38.0191 42.9086 38.4574 42.9086 38.8683 42.7443L50.8929 38.3069C51.3586 38.1426 51.3586 37.4852 50.8929 37.3209Z"
                                  fill="white"/>
                            <path d="M25.5836 32.3084L37.6083 36.7458C38.0191 36.8827 38.4574 36.8827 38.8683 36.7458L50.8929 32.3084C51.3586 32.1441 51.3586 31.4593 50.8929 31.295L38.8683 26.8576C38.4574 26.7206 38.0191 26.7206 37.6083 26.8576L25.5836 31.295C25.118 31.4593 25.118 32.1441 25.5836 32.3084Z"
                                  fill="white"/>
                            <rect id="anim4" x="1.30921" y="1.30921" width="74.1447" height="74.1447" rx="17.2697"
                                  stroke="#B7BAD1" stroke-width="1.38158" stroke-dasharray="4.61 4.61"/>
                        </svg>

                        <!--                        <img src="/wp-content/themes/tappengine-afterglow/assets/img/Group 46249.svg" alt="">-->
                        <div>Trading and Execution API</div>
                    </div>
                    <div class="business-needs__group-icon icon-5">
                        <!--                        <img src="/wp-content/themes/tappengine-afterglow/assets/img/Group 46245.svg" alt="">-->
                        <svg width="77" height="77" viewBox="0 0 77 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect id="anim5" x="1.30921" y="1.30921" width="74.1447" height="74.1447" rx="17.2697"
                                  stroke="#B7BAD1" stroke-width="1.38158" stroke-dasharray="4.61 4.61"/>
                            <rect x="5.16406" y="4.76367" width="65.983" height="65.983" rx="13.8158" fill="#11142D"/>
                            <path d="M51.0977 33.6234H50.3478C49.778 32.1237 48.7881 30.804 47.4384 29.6942C47.7983 29.0943 48.2483 28.4344 48.7282 27.8645C49.1181 27.4146 48.8181 26.6948 48.2183 26.6348C46.6286 26.5148 44.9489 26.9947 43.5692 27.5346C41.9795 26.9647 40.2698 26.6348 38.4102 26.6348C34.241 26.6348 30.5517 28.2545 28.2721 30.714L26.5325 29.6342C25.7526 29.1543 24.7328 29.3942 24.2529 30.1741C23.773 30.9539 24.013 31.9737 24.7928 32.4537L26.5025 33.5034C26.1426 34.4033 25.9626 35.3631 25.9626 36.3829C25.9626 38.8724 27.1624 41.122 29.112 42.8316L30.6717 48.4405C30.7917 48.8605 31.1816 49.1604 31.6315 49.1604H35.3208C35.9806 49.1604 36.4606 48.5305 36.2806 47.9006L35.7107 45.861C36.5805 46.011 37.4804 46.101 38.4102 46.101C39.31 46.101 40.2098 46.011 41.0797 45.861L41.7995 48.4105C41.9195 48.8305 42.3094 49.1304 42.7593 49.1304H46.4486C47.1085 49.1304 47.5884 48.5005 47.4084 47.8706L46.2986 43.8814C48.1883 42.6817 49.628 41.032 50.3478 39.1723H51.1277C51.8775 39.1723 52.5074 38.5425 52.5074 37.7926V34.9432C52.4774 34.2533 51.8476 33.6234 51.0977 33.6234ZM39.8799 31.0739C39.1 30.924 38.2902 30.894 37.4804 30.9539C36.2206 31.0739 35.0208 31.4039 34.001 31.9737C33.8811 32.0337 33.7311 32.0637 33.6111 32.0637C33.3112 32.0637 33.0412 31.9138 32.8912 31.6438C32.6813 31.2539 32.8013 30.744 33.2212 30.504C34.4509 29.8142 35.8907 29.3942 37.3604 29.2743C38.3202 29.1843 39.28 29.2443 40.1798 29.3942C40.6297 29.4842 40.9297 29.9042 40.8397 30.3541C40.7797 30.864 40.3298 31.1639 39.8799 31.0739ZM45.8187 34.4333C45.1289 34.4333 44.559 33.8634 44.559 33.1735C44.559 32.4836 45.1289 31.9138 45.8187 31.9138C46.5086 31.9138 47.0785 32.4836 47.0785 33.1735C47.0785 33.8634 46.5086 34.4333 45.8187 34.4333Z"
                                  fill="white"/>
                        </svg>

                        <div>Digital Banking</div>
                    </div>
                    <div class="business-needs__group-icon icon-6">
                        <svg width="77" height="77" viewBox="0 0 77 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="6.08789" y="5.16699" width="65.9995" height="65.9995" rx="13.8158" fill="#11142D"/>
                            <path d="M27.1712 45.8613C27.4998 45.8613 27.7687 45.5924 27.7687 45.2638V30.9227C27.7687 30.5941 27.4998 30.3252 27.1712 30.3252H24.1835C23.8548 30.3252 23.5859 30.5941 23.5859 30.9227V45.2638C23.5859 45.5924 23.8548 45.8613 24.1835 45.8613H27.1712Z"
                                  fill="white"/>
                            <path d="M53.4641 35.512C53.0937 35.3148 52.6634 35.3268 52.3049 35.5538L47.5724 38.8702C46.8792 39.3602 46.2398 39.9219 45.6722 40.5553C45.5587 40.6867 45.4272 40.8122 45.2838 40.9198C44.5607 41.4815 43.6345 41.6787 42.7442 41.4576L36.9839 40.0832C36.5955 39.9936 36.3684 39.5992 36.4581 39.2168C36.5537 38.8284 36.9481 38.5953 37.3305 38.6909L43.0968 40.0653C43.5509 40.1788 44.0289 40.0832 44.4054 39.7844C44.7759 39.4976 44.991 39.0554 44.991 38.5834C44.991 37.9559 44.6683 37.4301 44.1484 37.1732L36.942 33.57C35.0538 32.6259 32.9445 32.1299 30.8411 32.1299H28.9648V43.6087H32.2035C33.6496 43.6087 35.0777 43.9433 36.3684 44.5947L38.0475 45.4372C40.8918 46.8653 44.2978 46.4411 46.7119 44.3736L53.6673 37.4122C53.9183 37.1971 54.0617 36.8863 54.0617 36.5517C54.0617 36.0857 53.8406 35.7151 53.4641 35.512Z"
                                  fill="white"/>
                            <rect id="anim6" x="1.30921" y="1.30921" width="74.1447" height="74.1447" rx="17.2697"
                                  stroke="#B7BAD1" stroke-width="1.38158" stroke-dasharray="4.61 4.61"/>
                        </svg>

                        <!--                        <img src="/wp-content/themes/tappengine-afterglow/assets/img/Group 46250.svg" alt="">-->
                        <div>SaaS</div>
                    </div>
                    <div class="business-needs__group-icon icon-7">
                        <!--                        <img src="/wp-content/themes/tappengine-afterglow/assets/img/Group 46254.svg" alt="">-->
                        <svg width="77" height="77" viewBox="0 0 77 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="6.08789" y="5.16699" width="65.9995" height="65.9995" rx="13.8158" fill="#11142D"/>
                            <rect id="anim7" x="1.30921" y="1.30921" width="74.1447" height="74.1447" rx="17.2697"
                                  stroke="#B7BAD1" stroke-width="1.38158" stroke-dasharray="4.61 4.61"/>
                            <path d="M54.2999 37.9819C54.2999 41.1018 51.7622 43.6395 48.6374 43.6395H47.0451V41.8681C47.0451 41.3157 46.647 40.853 46.1096 40.7634L44.995 40.5793L45.6568 39.6588C45.9703 39.2109 45.9155 38.6039 45.5324 38.2207L43.547 36.2404C43.338 36.0264 43.0544 35.9119 42.7559 35.9119C42.522 35.9119 42.2981 35.9816 42.104 36.1209L41.1934 36.7728L41.0093 35.6681C40.9198 35.1208 40.457 34.7277 39.9047 34.7277H37.0983C36.5509 34.7277 36.0832 35.1208 35.9936 35.6631L35.8095 36.7728L34.894 36.1159C34.7049 35.9816 34.481 35.9119 34.2471 35.9119C33.9486 35.9119 33.665 36.0264 33.456 36.2403L31.4706 38.2207C31.0875 38.6039 31.0327 39.2109 31.3512 39.6637L32.008 40.5793L30.9033 40.7634C30.361 40.853 29.9629 41.3157 29.9629 41.8681V43.6395H28.3607C25.2408 43.6395 22.7031 41.1018 22.7031 37.9819C22.7031 35.6582 24.1262 33.5783 26.2708 32.7324C26.8878 28.881 30.2515 26 34.1825 26C37.6556 26 40.7257 28.2391 41.8005 31.5033C42.2881 31.3142 42.8156 31.2147 43.353 31.2147C44.6268 31.2147 45.8061 31.7521 46.637 32.6925C47.264 32.4537 47.9357 32.3293 48.6374 32.3293C51.7622 32.3293 54.2999 34.867 54.2999 37.9819Z"
                                  fill="white"/>
                            <path d="M45.2971 41.6617L43.8062 41.4132C43.7339 41.2099 43.6525 41.0157 43.5622 40.8304L44.4432 39.6015C44.5381 39.466 44.5245 39.2807 44.4071 39.1633L42.6043 37.3651C42.4869 37.2476 42.3016 37.2341 42.1661 37.3289L40.9417 38.2054C40.752 38.1151 40.5577 38.0338 40.3589 37.966L40.1104 36.475C40.0833 36.3079 39.9432 36.1904 39.7761 36.1904H37.2279C37.0607 36.1904 36.9207 36.3124 36.8936 36.475L36.6451 37.966C36.4463 38.0338 36.252 38.1151 36.0623 38.2055L34.8379 37.329C34.7023 37.2341 34.5171 37.2476 34.3996 37.3651L32.5969 39.1633C32.4795 39.2807 32.4659 39.466 32.5608 39.6015L33.4418 40.8304C33.3514 41.0157 33.2701 41.2099 33.1978 41.4132L31.7114 41.6617C31.5442 41.6889 31.4268 41.8289 31.4268 41.9961V44.5397C31.4268 44.7069 31.5442 44.8469 31.7114 44.8741L33.1978 45.1225C33.2701 45.3259 33.3514 45.5201 33.4373 45.7054L32.5608 46.9343C32.4659 47.0698 32.4795 47.255 32.5969 47.3725L34.3996 49.1707C34.5171 49.2881 34.7023 49.3017 34.8379 49.2068L36.0668 48.3258C36.252 48.4162 36.4463 48.4975 36.6451 48.5698L36.8936 50.0562C36.9207 50.2189 37.0607 50.3409 37.2279 50.3409H39.7761C39.9432 50.3409 40.0833 50.2234 40.1104 50.0562L40.3589 48.5698C40.5577 48.4975 40.752 48.4162 40.9372 48.3258L42.1661 49.2068C42.3016 49.3017 42.4869 49.2881 42.6043 49.1707L44.4071 47.3725C44.5245 47.255 44.5381 47.0698 44.4432 46.9343L43.5667 45.7054C43.6525 45.5201 43.7339 45.3259 43.8062 45.1271L45.2971 44.8741C45.4643 44.8469 45.5817 44.7069 45.5817 44.5397V41.9961C45.5817 41.8289 45.4643 41.6889 45.2971 41.6617ZM38.502 46.4508C36.749 46.4508 35.3213 45.0232 35.3213 43.2656C35.3213 41.5126 36.749 40.085 38.502 40.085C40.2595 40.085 41.6872 41.5126 41.6872 43.2656C41.6872 45.0232 40.2595 46.4508 38.502 46.4508Z"
                                  fill="white"/>
                        </svg>
                        <div>Self-Directed Electronic Brokerage</div>
                    </div>
                </div>
            </div>

            <div class="business-needs__scroll-down">SCROLL DOWN<img
                        src="/wp-content/themes/tappengine-afterglow/assets/img/arrow-down.svg" alt=""></div>


        </div>


    </section>

    <section id="solution" class="turnkey">
        <div class="container turnkey__container">
            <div class="turnkey__grid-row">
                <div class="turnkey__description">
                    <h2 class="turnkey__h2">Turnkey<br> go-to-market solution</h2>
                    <div class="turnkey__caption-purple">Cloud based</div>
                    <p class="turnkey__text">Our solutions are fully cloud based which is hosted within AWS servers,
                        ensuring a highly scalable offering within the most flexible and secure cloud computing
                        environment available today. Utilizing AWS infrastructure, we protect our clients' data within
                        the most secure global infrastructure.</p>
                    <div class="turnkey__grid-icons">
                        <div class="turnkey__grid-icon turnkey__grid-icon1"><img
                                    src="/wp-content/themes/tappengine-afterglow/assets/img/grid-icon1.svg" alt="">
                            <div class="text text1">Capture New Assets, Increase Wallet Share</div>
                        </div>
                        <div class="turnkey__grid-icon turnkey__grid-icon2"><img
                                    src="/wp-content/themes/tappengine-afterglow/assets/img/grid-icon2.svg" alt="">
                            <div class="text text2">Enhance your<br> Corporate Brand</div>
                        </div>
                        <div class="turnkey__grid-icon turnkey__grid-icon3"><img
                                    src="/wp-content/themes/tappengine-afterglow/assets/img/grid-icon3.svg" alt="">
                            <div class="text text3">Promote Financial Literacy</div>
                        </div>
                        <div class="turnkey__grid-icon turnkey__grid-icon4"><img
                                    src="/wp-content/themes/tappengine-afterglow/assets/img/grid-icon4.svg" alt="">
                            <div class="text text4">Retain highly satisfied Customers and Members</div>
                        </div>
                    </div>
                </div>
                <div class="turnkey__right-date">
                    <div class="turnkey__right-date-title">Who we serve:</div>
                    <ul class="turnkey__list-icons">
                        <li class="turnkey__list-icon"><img
                                    src="/wp-content/themes/tappengine-afterglow/assets/img/credit-card.svg" alt="">Credit
                            Unions
                        </li>
                        <li class="turnkey__list-icon"><img
                                    src="/wp-content/themes/tappengine-afterglow/assets/img/banks.svg" alt="">Community
                            Banks
                        </li>
                        <li class="turnkey__list-icon"><img
                                    src="/wp-content/themes/tappengine-afterglow/assets/img/rias.svg" alt="">RIAs
                        </li>
                        <li class="turnkey__list-icon"><img
                                    src="/wp-content/themes/tappengine-afterglow/assets/img/broker.svg" alt="">Independent
                            Broker/Dealers
                        </li>
                        <li class="turnkey__list-icon"><img
                                    src="/wp-content/themes/tappengine-afterglow/assets/img/trust.svg" alt="">Trust
                            Сompanies
                        </li>
                        <li class="turnkey__list-icon"><img
                                    src="/wp-content/themes/tappengine-afterglow/assets/img/TAMPS.svg" alt="">TAMPs
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="saas">
        <img class="bg-left" src="/wp-content/themes/tappengine-afterglow/assets/img/bg-saas-left.svg" alt="">
        <div class="container saas__container">
            <div class="saas__grid-row">
                <div class="saas__description">
                    <h2 class="saas__h2">SaaS Self-Directed<br> Investing/Trading Platform</h2>
                    <p class="saas__text">We offer a turnkey cloud-based self-directed brokerage application, both
                        mobile and web-based, under your brand
                        to empower your members and clients to manage their self-directed investments. We also provide full
                        operational service and
                        support as well as compliance requirements.</p>
                    <div class="saas_tabs">
                        <div class="tabset">
                            <!-- Tab 1 -->
                            <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
                            <label for="tab1">Description</label>
                            <!-- Tab 2 -->
                            <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
                            <label for="tab2">Value Proposition</label>
                            <!-- Tab 3 -->
                            <input type="radio" name="tabset" id="tab3" aria-controls="dunkles">
                            <label for="tab3">Details</label>

                            <div class="tab-panels">
                                <section id="marzen" class="tab-panel">
                                    <ul>
                                        <li>Multi-asset single instrument trading</li>
                                        <li>Fractional shares</li>
                                        <li>Web or mobile app</li>
                                        <li>RESTful API Investing/Trading</li>
                                        <li>Ability to support $0 commission trading</li>
                                        <li>Multi-Venue Execution</li>
                                        <li>Integrated AML/KYC</li>
                                        <li>Seamless Digital Banking to Brokerage Onboarding</li>
                                        <li>White labeled to Banks, Credit Unions, BDs & RIAs</li>
                                    </ul>
                                </section>
                                <section id="rauchbier" class="tab-panel">
                                    <ul>
                                        <li>Attract new clients</li>
                                        <li>Capture existing clients currently using competitor’s tools (retention
                                            strategy)
                                        </li>
                                        <li>Up-sell to Digital Investment Platform, or Advisor model</li>
                                    </ul>
                                </section>
                                <section id="dunkles" class="tab-panel">
                                    <ul>
                                        <li>Trade stocks, ETFs, bonds, options, mutual funds, Cryptos</li>
                                        <li>Infrastructure is in place including comprehensive reporting, activity and
                                            compliance requirements
                                        </li>
                                    </ul>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="saas__right-date">
                    <img src="/wp-content/themes/tappengine-afterglow/assets/img/mobile.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="advisor-solution saas">
        <div class="container advisor-solution__container">
            <div class="advisor-solution__grid-row">
                <div class="advisor-solution__right-date">
                    <div class="advisor-solution__wrap-img">
                        <img src="/wp-content/themes/tappengine-afterglow/assets/img/dash1.png" alt="">
                    </div>
                </div>
                <div class="advisor-solution__description">
                    <h2 class="advisor-solution__h2">Digital Advisor Solution</h2>
                    <p class="advisor-solution__text">Our turnkey integrated AI powered digital advisor solution is
                        fully open architecture and branded to your institution. It offers all the full features and
                        functionality you will need to provide your clients with an intuitive, engaging and
                        comprehensive investment experience regardless of age, net worth, investable assets or
                        experience.</p>
                    <div class="turnkey__caption-purple brokerage-api__purple brokerage-api__purple-second">Experienced
                        Features:
                    </div>
                    <ul class="advisor-solution__list">
                        <li>Digital account opening and seamless funding process</li>
                        <li>Integration into any core systems</li>
                        <li>Engaging AI powered customer profiling and suitability process</li>
                        <li>AI powered portfolio design, construction and rebalancing based on each clients presonal
                            needs, goals and capabilities
                        </li>
                        <li>Custody, Clearing and Compliance service provided by TAPP Clear</li>
                        <li>No development or onboarding costs</li>
                    </ul>
                </div>
            </div>
            <div class="advisor-solution__grid-tabs">
                <h3 class="turnkey__caption-purple">integrated ai powered digital advisor</h3>
                <div class="saas_tabs">
                    <div class="tabset_2">
                        <!-- Tab 1 -->
                        <input type="radio" name="tabset_2" id="tab4" aria-controls="Description" checked>
                        <label for="tab4">Description</label>
                        <!-- Tab 2 -->
                        <input type="radio" name="tabset_2" id="tab5" aria-controls="Proposition">
                        <label for="tab5">Value Proposition</label>
                        <!-- Tab 3 -->
                        <input type="radio" name="tabset_2" id="tab6" aria-controls="Details">
                        <label for="tab6">Details</label>

                        <div class="tab-panels_2">
                            <section id="Description" class="tab-panel_2">
                                <ul>
                                    <li>Fully automated AI powered portfolio management platform</li>
                                    <li>Open architecture</li>
                                    <li>Linked to advisor (optional)</li>
                                    <li>Planning based model delivery</li>
                                </ul>
                            </section>
                            <section id="Proposition" class="tab-panel_2">
                                <ul>
                                    <li>Capture new assets with focus on younger and new investors</li>
                                    <li>Promote financial literacy</li>
                                    <li>Small account solution for advisors to increase efficiency</li>
                                    <li>Introduce clients to planning based approach</li>
                                    <li>Revenue generating</li>
                                </ul>
                            </section>
                            <section id="Details" class="tab-panel_2">
                                <ul>
                                    <li>Link to advisor vitually as an option</li>
                                    <li>Account opening, suitability and planning process customized to the client</li>
                                    <li>No onboarding cost</li>
                                    <li>Integrated clearing and custody</li>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="bg-img" src="/wp-content/themes/tappengine-afterglow/assets/img/bg-bot-right.svg" alt="">
    </section>

    <section class="advisor-solution saas turnkey-saas">
        <div class="container advisor-solution__container">
            <div class="advisor-solution__grid-row">
                <div class="advisor-solution__right-date">
                    <div class="advisor-solution__wrap-img">
                        <img src="/wp-content/themes/tappengine-afterglow/assets/img/dash 2.png" alt="">
                    </div>
                </div>
                <div class="advisor-solution__description">
                    <h2 class="advisor-solution__h2">Turnkey SaaS Digital Banking Solution <span class="caption-title text-purple">Coming soon</span></h2>
                    <p class="advisor-solution__text">Our customized turnkey challenger bank solution is built with
                        cutting-edge technology and service-oriented architecture for best- in-class scalability and
                        performance.</p>
                    <p class="advisor-solution__text turnkey-saas__text">We built our solution on state-of-the-art cloud
                        technology with microservices and modular
                        architecture, embedded with AML/KYC checks, along with other features and functions.</p>
                </div>
            </div>
            <div class="advisor-solution__grid-tabs turnkey-saas__grid">
                <div class="turnkey-saas__description">
                    <h3 class="turnkey__caption-purple">branded “challenger banking” solution</h3>
                    <div class="saas_tabs">
                        <div class="tabset_3">
                            <!-- Tab 1 -->
                            <input type="radio" name="tabset_3" id="tab7" aria-controls="Description_3" checked>
                            <label for="tab7">Description</label>
                            <!-- Tab 2 -->
                            <input type="radio" name="tabset_3" id="tab8" aria-controls="Proposition_3">
                            <label for="tab8">Value Proposition</label>
                            <!-- Tab 3 -->
                            <input type="radio" name="tabset_3" id="tab9" aria-controls="Details_3">
                            <label for="tab9">Details</label>

                            <div class="tab-panels_3">
                                <section id="Description_3" class="tab-panel_3">
                                    <ul>
                                        <li>Full functionality “Challenger Bank” model</li>
                                        <li>Checking & Savings</li>
                                        <li>FDIC Insurance</li>
                                        <li>Debit card</li>
                                        <li>White label</li>
                                        <li>3-minute account opening process</li>
                                        <li>Customer Service Tools, Teller terminal</li>
                                    </ul>
                                </section>
                                <section id="Proposition_3" class="tab-panel_3">
                                    <ul>
                                        <li>Capture new assets with cash sweep</li>
                                        <li>Provides BD or Advisor insight and access to client finances</li>
                                        <li>Generate new income sources including debit card fee sharing</li>
                                        <li>Access next generation clients</li>
                                    </ul>
                                </section>
                                <section id="Details_3" class="tab-panel_3">
                                    <ul>
                                        <li>Mobile App</li>
                                        <li>Jt, Trust, Business accounts, etc</li>
                                        <li>Bill pay</li>
                                        <li>Check writing</li>
                                        <li>ACH verification. Yodlee or Plaid</li>
                                        <li>Rules based ACH internal transfers</li>
                                        <li>Wire in/Wire out</li>
                                        <li>Direct deposit</li>
                                        <li>Mobile check deposit</li>
                                        <li>Account alerts</li>
                                        <li>Venmo, Zelle, Cash App</li>
                                        <li>More</li>
                                    </ul>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="turnkey-saas__code">
                    <img src="/wp-content/themes/tappengine-afterglow/assets/img/code.svg" alt="">
                </div>
            </div>
        </div>
        <img class="bg-img" src="/wp-content/themes/tappengine-afterglow/assets/img/bg-bot-left.svg" alt="">
    </section>

    <section class="advisor-solution saas brokerage-api">
        <div class="container advisor-solution__container">
            <div class="advisor-solution__grid-row">
                <div class="advisor-solution__right-date">
                    <div class="brokerage-api__wrap-code">
                        <img src="/wp-content/themes/tappengine-afterglow/assets/img/pic-date-api.svg" alt="">
                        <ul class="brokerage-api__list">
                            <li>User Registration</li>
                            <li>Password reset</li>
                            <li>Account funding</li>
                            <li>advanced order types</li>
                            <li>real time market data</li>
                            <li>Authentication</li>
                            <li>Margin and short selling</li>
                            <li class="active">Orders</li>
                            <li>CUSIPs</li>
                            <li>simulation enviroment</li>
                            <li>two-factor Authentication</li>
                            <li>Account opening</li>
                            <li>fractional shares</li>
                            <li>historical data</li>
                            <li>positions and balances</li>
                        </ul>
                    </div>
                </div>
                <div class="advisor-solution__description">
                    <h2 class="advisor-solution__h2">Open Brokerage API</h2>
                    <div class="turnkey__caption-purple brokerage-api__purple">Trading, Execution, Clearing and Custody
                        API
                    </div>
                    <p class="advisor-solution__text brokerage-api__text-first">Our multi-asset trading, clearing and
                        custody API offers turnkey
                        integration, and easy configuration – Stocks, Bonds, Options, ETFs and Fractional Shares.</p>
                    <p class="brokerage-api__text">We handle execution, custody and clearing in most asset classes for
                        FinTech and FinServ platforms.</p>

                    <div class="turnkey__caption-purple brokerage-api__purple brokerage-api__purple-second">Experienced
                        Operations Team
                    </div>
                    <ul class="advisor-solution__list brokerage-api__description-list">
                        <li>Onboarding</li>
                        <li>Trading Support</li>
                        <li>Operations</li>
                        <li>Surveillance</li>
                        <li>Risk Management</li>
                    </ul>
                    <a href="/api-access-request/" class="btn btn-get-api">Get the API</a>
                </div>
            </div>
        </div>
        <img class="bg-img" src="/wp-content/themes/tappengine-afterglow/assets/img/bg-top-right.svg" alt="">
    </section>

<?php get_footer() ?>