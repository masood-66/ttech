/* Slider 01 */
var tpj = jQuery;
if (window.RS_MODULES === undefined) window.RS_MODULES = {};
if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["revslider21"] = {
    once: RS_MODULES.modules["revslider21"] !== undefined ? RS_MODULES.modules["revslider21"].once : undefined,
    init: function() {
        window.revapi2 = window.revapi2 === undefined || window.revapi2 === null || window.revapi2.length === 0 ? document.getElementById("rev_slider_2_1") : window.revapi2;
        if (window.revapi2 === null || window.revapi2 === undefined || window.revapi2.length == 0) {
            window.revapi2initTry = window.revapi2initTry === undefined ? 0 : window.revapi2initTry + 1;
            if (window.revapi2initTry < 20) requestAnimationFrame(function() {
                RS_MODULES.modules["revslider21"].init()
            });
            return;
        }
        window.revapi2 = jQuery(window.revapi2);
        if (window.revapi2.revolution == undefined) {
            revslider_showDoubleJqueryError("rev_slider_2_1");
            return;
        }
        revapi2.revolutionInit({
            revapi: "revapi2",
            DPR: "dpr",
            sliderLayout: "fullwidth",
            visibilityLevels: "1240,1024,778,480",
            gridwidth: "1030,1024,778,480",
            gridheight: "810,768,750,600",
            perspective: 600,
            perspectiveType: "global",
            editorheight: "810,768,750,600",
            responsiveLevels: "1240,1024,778,480",
            progressBar: {
                disableProgressBar: true
            },
            navigation: {
                wheelCallDelay: 1000,
                onHoverStop: false,
                bullets: {
                    enable: true,
                    tmp: "<span></span>",
                    style: "invite-navigation",
                    h_align: "left",
                    v_align: "center",
                    h_offset: 40,
                    v_offset: -90,
                    direction: "vertical",
                    space: 16
                }
            },
            viewPort: {
                global: false,
                globalDist: "-200px",
                enable: false
            },
            fallbacks: {
                allowHTML5AutoPlayOnAndroid: true
            },
        });

    }
} // End of RevInitScript
if (window.RS_MODULES.checkMinimal !== undefined) {
    window.RS_MODULES.checkMinimal();
};


/* Slider 02 */
var tpj = jQuery;
if (window.RS_MODULES === undefined) window.RS_MODULES = {};
if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["revslider31"] = {
    once: RS_MODULES.modules["revslider31"] !== undefined ? RS_MODULES.modules["revslider31"].once : undefined,
    init: function() {
        window.revapi3 = window.revapi3 === undefined || window.revapi3 === null || window.revapi3.length === 0 ? document.getElementById("rev_slider_3_1") : window.revapi3;
        if (window.revapi3 === null || window.revapi3 === undefined || window.revapi3.length == 0) {
            window.revapi3initTry = window.revapi3initTry === undefined ? 0 : window.revapi3initTry + 1;
            if (window.revapi3initTry < 20) requestAnimationFrame(function() {
                RS_MODULES.modules["revslider31"].init()
            });
            return;
        }
        window.revapi3 = jQuery(window.revapi3);
        if (window.revapi3.revolution == undefined) {
            revslider_showDoubleJqueryError("rev_slider_3_1");
            return;
        }
        revapi3.revolutionInit({
            revapi: "revapi3",
            DPR: "dpr",
            sliderLayout: "fullwidth",
            visibilityLevels: "1240,1024,778,480",
            gridwidth: "1180,1024,778,481",
            gridheight: "1240,1000,960,800",
            maxHeight: "1240px",
            perspective: 600,
            perspectiveType: "global",
            editorheight: "1240,1000,960,800",
            responsiveLevels: "1240,1024,778,480",
            progressBar: {
                disableProgressBar: true
            },
            navigation: {
                wheelCallDelay: 1000,
                onHoverStop: false,
                bullets: {
                    enable: true,
                    tmp: "<span></span>",
                    style: "invite-navigation_two",
                    h_align: "left",
                    v_align: "center",
                    h_offset: 63,
                    v_offset: -264,
                    direction: "vertical",
                    space: 14
                }
            },
            viewPort: {
                global: false,
                globalDist: "-200px",
                enable: false
            },
            fallbacks: {
                allowHTML5AutoPlayOnAndroid: true
            },
        });

    }
} // End of RevInitScript
if (window.RS_MODULES.checkMinimal !== undefined) {
    window.RS_MODULES.checkMinimal();
};

/* Slider 03 */
var tpj = jQuery;
if (window.RS_MODULES === undefined) window.RS_MODULES = {};
if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["revslider11"] = {
    once: RS_MODULES.modules["revslider11"] !== undefined ? RS_MODULES.modules["revslider11"].once : undefined,
    init: function() {
        window.revapi1 = window.revapi1 === undefined || window.revapi1 === null || window.revapi1.length === 0 ? document.getElementById("rev_slider_1_1") : window.revapi1;
        if (window.revapi1 === null || window.revapi1 === undefined || window.revapi1.length == 0) {
            window.revapi1initTry = window.revapi1initTry === undefined ? 0 : window.revapi1initTry + 1;
            if (window.revapi1initTry < 20) requestAnimationFrame(function() {
                RS_MODULES.modules["revslider11"].init()
            });
            return;
        }
        window.revapi1 = jQuery(window.revapi1);
        if (window.revapi1.revolution == undefined) {
            revslider_showDoubleJqueryError("rev_slider_1_1");
            return;
        }
        revapi1.revolutionInit({
            revapi: "revapi1",
            DPR: "dpr",
            sliderLayout: "fullwidth",
            visibilityLevels: "1240,1024,778,480",
            gridwidth: "1200,1024,778,480",
            gridheight: "838,768,600,600",
            perspective: 600,
            perspectiveType: "global",
            editorheight: "838,768,600,600",
            responsiveLevels: "1240,1024,778,480",
            progressBar: {
                disableProgressBar: true
            },
            navigation: {
                wheelCallDelay: 1000,
                onHoverStop: false,
                bullets: {
                    enable: true,
                    tmp: "",
                    style: "invite_navigation_three",
                    anim: "left",
                    h_align: "left",
                    v_align: "center",
                    h_offset: 35,
                    v_offset: -60,
                    direction: "vertical",
                    space: 2
                }
            },
            viewPort: {
                global: false,
                globalDist: "-200px",
                enable: false
            },
            fallbacks: {
                allowHTML5AutoPlayOnAndroid: true
            },
        });

    }
} // End of RevInitScript
if (window.RS_MODULES.checkMinimal !== undefined) {
    window.RS_MODULES.checkMinimal();
};

/* Slider 04 */
var tpj = jQuery;
if (window.RS_MODULES === undefined) window.RS_MODULES = {};
if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["revslider51"] = {
    once: RS_MODULES.modules["revslider51"] !== undefined ? RS_MODULES.modules["revslider51"].once : undefined,
    init: function() {
        window.revapi5 = window.revapi5 === undefined || window.revapi5 === null || window.revapi5.length === 0 ? document.getElementById("rev_slider_5_1") : window.revapi5;
        if (window.revapi5 === null || window.revapi5 === undefined || window.revapi5.length == 0) {
            window.revapi5initTry = window.revapi5initTry === undefined ? 0 : window.revapi5initTry + 1;
            if (window.revapi5initTry < 20) requestAnimationFrame(function() {
                RS_MODULES.modules["revslider51"].init()
            });
            return;
        }
        window.revapi5 = jQuery(window.revapi5);
        if (window.revapi5.revolution == undefined) {
            revslider_showDoubleJqueryError("rev_slider_5_1");
            return;
        }
        revapi5.revolutionInit({
            revapi: "revapi5",
            sliderType: "hero",
            DPR: "dpr",
            sliderLayout: "fullwidth",
            visibilityLevels: "1240,1024,778,480",
            gridwidth: "1215,1024,778,480",
            gridheight: "900,768,660,620",
            perspective: 600,
            perspectiveType: "global",
            editorheight: "900,768,660,620",
            responsiveLevels: "1240,1024,778,480",
            progressBar: {
                disableProgressBar: true
            },
            navigation: {
                onHoverStop: false
            },
            viewPort: {
                global: false,
                globalDist: "-200px",
                enable: false
            },
            fallbacks: {
                allowHTML5AutoPlayOnAndroid: true
            },
        });

    }
} // End of RevInitScript
if (window.RS_MODULES.checkMinimal !== undefined) {
    window.RS_MODULES.checkMinimal();
};