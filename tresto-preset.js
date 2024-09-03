module.exports = {
    "presets": [
        {
            "theme": {
                "extend": {
                    "screens": {
                        "xs": "480px",
                        "sm": "640px",
                        "md": "768px",
                        "lg": "1024px",
                        "xl": "1280px"
                    },
                    "colors": {
                        "current": "currentColor",
                        "transparent": "transparent",
                        "black": "#302E2E",
                        "white": "#fff",
                        "secondary": "#f6ea7d",
                        'tresto': {
                            '50': '#fef2f2',
                            '100': '#fce7e7',
                            '200': '#f9d2d5',
                            '300': '#f3aeb2',
                            '400': '#ec8088',
                            '500': '#e15262',
                            '600': '#c43047',
                            '700': '#ac243c',
                            '800': '#902139',
                            '900': '#7b2036',
                            '950': '#440d18',
                        },
                        "orange": {
                            "50": "#FFF2D6",
                            "100": "#FFE0A5",
                            "200": "#FFC96D",
                            "300": "#FFA632",
                            "400": "#FF8A0A",
                            "500": "#FF7100",
                            "600": "#CC5102",
                            "700": "#A13F0B",
                            "800": "#82360C",
                            "900": "#461904"
                        },
                        "purple": {
                            "50": "#F3E2ED",
                            "100": "#EDD4E3",
                            "200": "#DFB9CF",
                            "300": "#C483A9",
                            "400": "#B46995",
                            "500": "#AF4683",
                            "600": "#9C306F",
                            "700": "#881C5B",
                            "800": "#6F0B45",
                            "900": "#530031"
                        },
                        "red": {
                            "50": "#FEF3F2",
                            "100": "#FEE5E2",
                            "200": "#FED0CA",
                            "300": "#FCAFA5",
                            "400": "#F88171",
                            "500": "#EF5844",
                            "600": "#DC3B26",
                            "700": "#B92E1C",
                            "800": "#992A1B",
                            "900": "#7F281D"
                        },
                        "amber": {
                            "50": "#FFFAEB",
                            "100": "#FEEFC7",
                            "200": "#FEDF89",
                            "300": "#FDC74C",
                            "400": "#FDB735",
                            "500": "#F78E09",
                            "600": "#DB6804",
                            "700": "#B54708",
                            "800": "#93360D",
                            "900": "#792D0E"
                        },
                        "green": {
                            "50": "#F0FDF4",
                            "100": "#DDFBE7",
                            "200": "#BDF5D1",
                            "300": "#89ECAD",
                            "400": "#4EDA81",
                            "500": "#2AD167",
                            "600": "#1A9F4B",
                            "700": "#187D3E",
                            "800": "#186335",
                            "900": "#16512D"
                        },
                        "blue": {
                            "50": "#EFF8FF",
                            "100": "#DAEEFF",
                            "200": "#BEE1FF",
                            "300": "#91D0FF",
                            "400": "#5DB5FD",
                            "500": "#3895FA",
                            "600": "#2176EF",
                            "700": "#195FDC",
                            "800": "#1B4DB2",
                            "900": "#1C448C"
                        },
                        "gray": {
                            "50": "#F0F0F0",
                            "100": "#E4E4E4",
                            "200": "#D1D1D1",
                            "300": "#B8B8B8",
                            "400": "#A3A3A3",
                            "500": "#8C8C8C",
                            "600": "#6A6A6A",
                            "700": "#5A5A5A",
                            "800": "#3D3D3D",
                            "900": "#282828"
                        }
                    },
                    "spacing": {
                        "0": "0px",
                        "1": "0.25rem",
                        "2": "0.5rem",
                        "3": "0.75rem",
                        "4": "1rem",
                        "5": "1.25rem",
                        "6": "1.5rem",
                        "7": "1.75rem",
                        "8": "2rem",
                        "9": "2.25rem",
                        "10": "2.5rem",
                        "11": "2.75rem",
                        "12": "3rem",
                        "14": "3.5rem",
                        "16": "4rem",
                        "18": "4.5rem",
                        "20": "5rem",
                        "24": "6rem",
                        "26": "6.5rem",
                        "28": "7rem",
                        "32": "8rem",
                        "36": "9rem",
                        "40": "10rem",
                        "44": "11rem",
                        "48": "12rem",
                        "52": "13rem",
                        "56": "14rem",
                        "60": "15rem",
                        "64": "16rem",
                        "72": "18rem",
                        "80": "20rem",
                        "96": "24rem",
                        "112": "28rem",
                        "128": "32rem",
                        "px": "1px",
                        "0.5": "0.125rem",
                        "1.5": "0.375rem",
                        "2.5": "0.625rem",
                        "3.5": "0.875rem"
                    },
                    "animation": {
                        "none": "none",
                        "spin": "spin 1s linear infinite",
                        "ping": "ping 1s cubic-bezier(0, 0, 0.2, 1) infinite",
                        "pulse": "pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite",
                        "bounce": "bounce 1s infinite",
                        "movingLeft": "movingLeft 35s linear infinite",
                        "movingRight": "movingRight 35s linear infinite",
                        "pulseText": "pulseText 10s ease-in-out infinite",
                        "pulseTextDark": "pulseTextDark 10s ease-in-out infinite",
                        "pulseTextGreen": "pulseTextGreen 10s ease-in-out infinite",
                        "showLine": "showLine 5s linear infinite",
                        "searchInput": "showSearchInput 1s linear",
                        "fill": "animFill 500ms linear both"
                    },
                    "backdropBlur": {
                        "none": "none",
                        "sm": "4px",
                        "md": "12px",
                        "DEFAULT": "20px",
                        "lg": "24px",
                        "xl": "28px",
                        "2xl": "40px",
                        "3xl": "64px"
                    },
                    "filter": {
                        "DEFAULT": "",
                        "blur": "blur(var(--tw-blur))",
                        "none": "none"
                    },
                    "backdropBrightness": (theme) => theme('brightness'),
                    "backdropContrast": (theme) => theme('contrast'),
                    "backdropGrayscale": (theme) => theme('grayscale'),
                    "backdropHueRotate": (theme) => theme('hueRotate'),
                    "backdropInvert": (theme) => theme('invert'),
                    "backdropOpacity": (theme) => theme('opacity'),
                    "backdropSaturate": (theme) => theme('saturate'),
                    "backdropSepia": (theme) => theme('sepia'),
                    "backgroundColor": theme => ({
            ...theme('colors'),
            body: '#fff',
        }),
                    "backgroundImage": {
                        "none": "none",
                        "gradient-to-t": "linear-gradient(to top, var(--tw-gradient-stops))",
                        "gradient-to-tr": "linear-gradient(to top right, var(--tw-gradient-stops))",
                        "gradient-to-r": "linear-gradient(to right, var(--tw-gradient-stops))",
                        "gradient-to-br": "linear-gradient(to bottom right, var(--tw-gradient-stops))",
                        "gradient-to-b": "linear-gradient(to bottom, var(--tw-gradient-stops))",
                        "gradient-to-bl": "linear-gradient(to bottom left, var(--tw-gradient-stops))",
                        "gradient-to-l": "linear-gradient(to left, var(--tw-gradient-stops))",
                        "gradient-to-tl": "linear-gradient(to top left, var(--tw-gradient-stops))",
                        "radial": "radial-gradient(var(--tw-gradient-stops))",
                        "primary-gradient": "linear-gradient(90deg, #826FFF 0%, #511CFF 48.96%, #00D1FF 100%)"
                    },
                    "backgroundOpacity": (theme) => theme('opacity'),
                    "backgroundPosition": {
                        "bottom": "bottom",
                        "center": "center",
                        "left": "left",
                        "left-bottom": "left bottom",
                        "left-top": "left top",
                        "right": "right",
                        "right-bottom": "right bottom",
                        "right-top": "right top",
                        "top": "top"
                    },
                    "backgroundSize": {
                        "auto": "auto",
                        "cover": "cover",
                        "contain": "contain"
                    },
                    "blur": {
                        "0": "0",
                        "none": "0",
                        "sm": "4px",
                        "DEFAULT": "8px",
                        "md": "12px",
                        "lg": "16px",
                        "xl": "24px",
                        "2xl": "40px",
                        "3xl": "64px"
                    },
                    "brightness": {
                        "0": "0",
                        "50": ".5",
                        "75": ".75",
                        "90": ".9",
                        "95": ".95",
                        "100": "1",
                        "105": "1.05",
                        "110": "1.1",
                        "125": "1.25",
                        "150": "1.5",
                        "200": "2"
                    },
                    "borderColor": theme => ({
            ...theme('colors'),
            DEFAULT: '#D1D1D1',
        }),
                    "borderOpacity": (theme) => theme('opacity'),
                    "borderRadius": {
                        "none": "0",
                        "xs": "0.125rem",
                        "sm": "0.25rem",
                        "DEFAULT": "0.25rem",
                        "md": "0.375rem",
                        "lg": "0.5rem",
                        "xl": "0.625rem",
                        "2xl": "1rem",
                        "3xl": "1.25rem",
                        "4xl": "1.875rem",
                        "5xl": "2.5rem",
                        "full": "9999px"
                    },
                    "borderWidth": {
                        "0": "0",
                        "2": "2px",
                        "3": "3px",
                        "4": "4px",
                        "8": "8px",
                        "DEFAULT": "1px"
                    },
                    "boxShadow": {
                        "sm": "0px 1px 2px 0px rgba(83, 0, 49, 0.10)",
                        "DEFAULT": "0px 2px 4px -2px rgba(83, 0, 49, 0.02), 0px 6px 10px -2px rgba(83, 0, 49, 0.04)",
                        "md": "0px 4px 6px -2px rgba(83, 0, 49, 0.02), 0px 12px 16px -4px rgba(83, 0, 49, 0.04)",
                        "lg": "0px 8px 8px -4px rgba(83, 0, 49, 0.02), 0px 20px 24px -4px rgba(83, 0, 49, 0.04)",
                        "xl": "0px 24px 48px -12px rgba(83, 0, 49, 0.06)",
                        "2xl": "0px 32px 64px -12px rgba(83, 0, 49, 0.08)",
                        "none": "none"
                    },
                    "caretColor": (theme) => theme('colors'),
                    "contrast": {
                        "0": "0",
                        "50": ".5",
                        "75": ".75",
                        "100": "1",
                        "125": "1.25",
                        "150": "1.5",
                        "200": "2"
                    },
                    "container": [],
                    "cursor": {
                        "auto": "auto",
                        "DEFAULT": "default",
                        "pointer": "pointer",
                        "wait": "wait",
                        "text": "text",
                        "move": "move",
                        "not-allowed": "not-allowed"
                    },
                    "divideColor": (theme) => theme('borderColor'),
                    "divideOpacity": (theme) => theme('borderOpacity'),
                    "divideWidth": (theme) => theme('borderWidth'),
                    "dropShadow": {
                        "sm": "0 1px 1px rgba(0,0,0,0.05)",
                        "DEFAULT": [
                            "0 1px 2px rgba(0, 0, 0, 0.1)",
                            "0 1px 1px rgba(0, 0, 0, 0.06)"
                        ],
                        "md": [
                            "0 4px 3px rgba(0, 0, 0, 0.07)",
                            "0 2px 2px rgba(0, 0, 0, 0.06)"
                        ],
                        "lg": [
                            "0 10px 8px rgba(0, 0, 0, 0.04)",
                            "0 4px 3px rgba(0, 0, 0, 0.1)"
                        ],
                        "xl": [
                            "0 20px 13px rgba(0, 0, 0, 0.03)",
                            "0 8px 5px rgba(0, 0, 0, 0.08)"
                        ],
                        "2xl": "0 25px 25px rgba(0, 0, 0, 0.15)",
                        "none": "0 0 #0000"
                    },
                    "fill": {
                        "current": "currentColor"
                    },
                    "grayscale": {
                        "0": "0",
                        "DEFAULT": "100%"
                    },
                    "hueRotate": {
                        "0": "0deg",
                        "15": "15deg",
                        "30": "30deg",
                        "60": "60deg",
                        "90": "90deg",
                        "180": "180deg",
                        "-180": "-180deg",
                        "-90": "-90deg",
                        "-60": "-60deg",
                        "-30": "-30deg",
                        "-15": "-15deg"
                    },
                    "invert": {
                        "0": "0",
                        "DEFAULT": "100%"
                    },
                    "flex": {
                        "1": "1 1 0%",
                        "auto": "1 1 auto",
                        "initial": "0 1 auto",
                        "none": "none"
                    },
                    "flexGrow": {
                        "0": "0",
                        "DEFAULT": "1"
                    },
                    "flexShrink": {
                        "0": "0",
                        "DEFAULT": "1"
                    },
                    "fontFamily": {
                        "body": "\"IBM Plex Sans Arabic\", ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"",
                        "heading": "\"IBM Plex Sans Arabic\", ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"",
                        "sans": "\"IBM Plex Sans Arabic\", ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"",
                        "serif": "ui-serif, Georgia, Cambria, \"Times New Roman\", Times, serif",
                        "mono": "Figtree, SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace"
                    },
                    "fontSize": {
                        "xs": [
                            "0.75rem",
                            {
                                "lineHeight": "1.5"
                            }
                        ],
                        "sm": [
                            "0.875rem",
                            {
                                "lineHeight": "1.42"
                            }
                        ],
                        "base": [
                            "1rem",
                            {
                                "lineHeight": "1.5"
                            }
                        ],
                        "lg": [
                            "1.125rem",
                            {
                                "lineHeight": "1.55"
                            }
                        ],
                        "xl": [
                            "1.25rem",
                            {
                                "lineHeight": "1.5"
                            }
                        ],
                        "2xl": [
                            "1.5rem",
                            {
                                "lineHeight": "1.33"
                            }
                        ],
                        "3xl": [
                            "1.875rem",
                            {
                                "lineHeight": "1.26"
                            }
                        ],
                        "4xl": [
                            "2.25rem",
                            {
                                "lineHeight": "1.22"
                            }
                        ],
                        "5xl": [
                            "3rem",
                            {
                                "lineHeight": "1.25"
                            }
                        ],
                        "6xl": [
                            "3.75rem",
                            {
                                "lineHeight": "1"
                            }
                        ],
                        "7xl": [
                            "4.5rem",
                            {
                                "lineHeight": "1.25"
                            }
                        ],
                        "8xl": [
                            "7.5rem",
                            {
                                "lineHeight": "1.25"
                            }
                        ],
                        "9xl": [
                            "12rem",
                            {
                                "lineHeight": "1.25"
                            }
                        ],
                        "10xl": [
                            "15rem",
                            {
                                "lineHeight": "1.25"
                            }
                        ]
                    },
                    "fontWeight": {
                        "hairline": "100",
                        "thin": "200",
                        "light": "300",
                        "normal": "400",
                        "medium": "500",
                        "semibold": "600",
                        "bold": "700",
                        "extrabold": "800",
                        "black": "900"
                    },
                    "gap": (theme) => theme('spacing'),
                    "gradientColorStops": (theme) => theme('colors'),
                    "gridAutoColumns": {
                        "auto": "auto",
                        "min": "min-content",
                        "max": "max-content",
                        "fr": "minmax(0, 1fr)"
                    },
                    "gridAutoRows": {
                        "auto": "auto",
                        "min": "min-content",
                        "max": "max-content",
                        "fr": "minmax(0, 1fr)"
                    },
                    "gridColumn": {
                        "auto": "auto",
                        "span-1": "span 1 \/ span 1",
                        "span-2": "span 2 \/ span 2",
                        "span-3": "span 3 \/ span 3",
                        "span-4": "span 4 \/ span 4",
                        "span-5": "span 5 \/ span 5",
                        "span-6": "span 6 \/ span 6",
                        "span-7": "span 7 \/ span 7",
                        "span-8": "span 8 \/ span 8",
                        "span-9": "span 9 \/ span 9",
                        "span-10": "span 10 \/ span 10",
                        "span-11": "span 11 \/ span 11",
                        "span-12": "span 12 \/ span 12",
                        "span-full": "1 \/ -1"
                    },
                    "gridColumnEnd": {
                        "1": "1",
                        "2": "2",
                        "3": "3",
                        "4": "4",
                        "5": "5",
                        "6": "6",
                        "7": "7",
                        "8": "8",
                        "9": "9",
                        "10": "10",
                        "11": "11",
                        "12": "12",
                        "13": "13",
                        "auto": "auto"
                    },
                    "gridColumnStart": {
                        "1": "1",
                        "2": "2",
                        "3": "3",
                        "4": "4",
                        "5": "5",
                        "6": "6",
                        "7": "7",
                        "8": "8",
                        "9": "9",
                        "10": "10",
                        "11": "11",
                        "12": "12",
                        "13": "13",
                        "auto": "auto"
                    },
                    "gridRow": {
                        "auto": "auto",
                        "span-1": "span 1 \/ span 1",
                        "span-2": "span 2 \/ span 2",
                        "span-3": "span 3 \/ span 3",
                        "span-4": "span 4 \/ span 4",
                        "span-5": "span 5 \/ span 5",
                        "span-6": "span 6 \/ span 6",
                        "span-full": "1 \/ -1"
                    },
                    "gridRowStart": {
                        "1": "1",
                        "2": "2",
                        "3": "3",
                        "4": "4",
                        "5": "5",
                        "6": "6",
                        "7": "7",
                        "auto": "auto"
                    },
                    "gridRowEnd": {
                        "1": "1",
                        "2": "2",
                        "3": "3",
                        "4": "4",
                        "5": "5",
                        "6": "6",
                        "7": "7",
                        "auto": "auto"
                    },
                    "gridTemplateColumns": {
                        "1": "repeat(1, minmax(0, 1fr))",
                        "2": "repeat(2, minmax(0, 1fr))",
                        "3": "repeat(3, minmax(0, 1fr))",
                        "4": "repeat(4, minmax(0, 1fr))",
                        "5": "repeat(5, minmax(0, 1fr))",
                        "6": "repeat(6, minmax(0, 1fr))",
                        "7": "repeat(7, minmax(0, 1fr))",
                        "8": "repeat(8, minmax(0, 1fr))",
                        "9": "repeat(9, minmax(0, 1fr))",
                        "10": "repeat(10, minmax(0, 1fr))",
                        "11": "repeat(11, minmax(0, 1fr))",
                        "12": "repeat(12, minmax(0, 1fr))",
                        "none": "none"
                    },
                    "gridTemplateRows": {
                        "1": "repeat(1, minmax(0, 1fr))",
                        "2": "repeat(2, minmax(0, 1fr))",
                        "3": "repeat(3, minmax(0, 1fr))",
                        "4": "repeat(4, minmax(0, 1fr))",
                        "5": "repeat(5, minmax(0, 1fr))",
                        "6": "repeat(6, minmax(0, 1fr))",
                        "none": "none"
                    },
                    "height": theme => ({
            auto: 'auto',
            ...theme('spacing'),
            full: '100%',
            screen: '100vh',
        }),
                    "inset": (theme, { negative }) => ({
            auto: 'auto',
            ...theme('spacing'),
            ...negative(theme('spacing')),
            '1\/2': '50%',
            '1\/3': '33.333333%',
            '2\/3': '66.666667%',
            '1\/4': '25%',
            '2\/4': '50%',
            '3\/4': '75%',
            full: '100%',
            '-1\/2': '-50%',
            '-1\/3': '-33.333333%',
            '-2\/3': '-66.666667%',
            '-1\/4': '-25%',
            '-2\/4': '-50%',
            '-3\/4': '-75%',
            '-full': '-100%',
        }),
                    "keyframes": {
                        "spin": {
                            "to": {
                                "transform": "rotate(360deg)"
                            }
                        },
                        "ping": {
                            "75%, 100%": {
                                "transform": "scale(2)",
                                "opacity": "0"
                            }
                        },
                        "pulse": {
                            "50%": {
                                "opacity": ".5"
                            }
                        },
                        "bounce": {
                            "0%, 100%": {
                                "transform": "translateY(-25%)",
                                "animationTimingFunction": "cubic-bezier(0.8,0,1,1)"
                            },
                            "50%": {
                                "transform": "none",
                                "animationTimingFunction": "cubic-bezier(0,0,0.2,1)"
                            }
                        }
                    },
                    "letterSpacing": {
                        "10xl": "-4.8px",
                        "9xl": "-4px",
                        "8xl": "-3.6px",
                        "7xl": "-1.86px",
                        "6xl": "-1.44px",
                        "5xl": "-0.96px",
                        "4xl": "-2px",
                        "3xl": "-0.64px",
                        "2xl": "-0.48px",
                        "tightest": "-0.05em",
                        "tighter": "-0.04em",
                        "tight": "-0.02em",
                        "normal": "0em",
                        "wide": "0.025em",
                        "wider": "0.05em",
                        "widest": "0.1em"
                    },
                    "lineHeight": {
                        "3": ".75rem",
                        "4": "1rem",
                        "5": "1.25rem",
                        "6": "1.5rem",
                        "7": "1.75rem",
                        "8": "2rem",
                        "9": "2.25rem",
                        "10": "2.5rem",
                        "none": "1",
                        "tight": "1.25",
                        "snug": "1.375",
                        "normal": "1.5",
                        "relaxed": "1.625",
                        "loose": "2"
                    },
                    "listStyleType": {
                        "none": "none",
                        "disc": "disc",
                        "decimal": "decimal"
                    },
                    "margin": (theme, { negative }) => ({
            auto: 'auto',
            ...theme('spacing'),
            ...negative(theme('spacing')),
        }),
                    "maxHeight": {
                        "full": "100%",
                        "screen": "100vh"
                    },
                    "maxWidth": {
                        "0": "0rem",
                        "none": "none",
                        "xs": "20rem",
                        "sm": "24rem",
                        "md": "28rem",
                        "lg": "32rem",
                        "xl": "36rem",
                        "2xl": "42rem",
                        "3xl": "48rem",
                        "4xl": "50rem",
                        "5xl": "56rem",
                        "6xl": "63rem",
                        "7xl": "72rem",
                        "8xl": "76rem",
                        "full": "100%",
                        "min": "min-content",
                        "max": "max-content",
                        "prose": "65ch"
                    },
                    "minHeight": {
                        "0": "0",
                        "full": "100%",
                        "screen": "100vh"
                    },
                    "minWidth": {
                        "0": "0",
                        "full": "100%",
                        "min": "min-content",
                        "max": "max-content"
                    },
                    "objectPosition": {
                        "bottom": "bottom",
                        "center": "center",
                        "left": "left",
                        "left-bottom": "left bottom",
                        "left-top": "left top",
                        "right": "right",
                        "right-bottom": "right bottom",
                        "right-top": "right top",
                        "top": "top"
                    },
                    "opacity": {
                        "0": "0",
                        "5": "0.05",
                        "10": "0.1",
                        "20": "0.2",
                        "25": "0.25",
                        "30": "0.3",
                        "40": "0.4",
                        "50": "0.5",
                        "60": "0.6",
                        "70": "0.7",
                        "75": "0.75",
                        "80": "0.8",
                        "90": "0.9",
                        "95": "0.95",
                        "100": "1"
                    },
                    "order": {
                        "1": "1",
                        "2": "2",
                        "3": "3",
                        "4": "4",
                        "5": "5",
                        "6": "6",
                        "7": "7",
                        "8": "8",
                        "9": "9",
                        "10": "10",
                        "11": "11",
                        "12": "12",
                        "first": "-9999",
                        "last": "9999",
                        "none": "0"
                    },
                    "outline": {
                        "none": [
                            "2px solid transparent",
                            "2px"
                        ],
                        "white": [
                            "2px dotted white",
                            "2px"
                        ],
                        "black": [
                            "2px dotted black",
                            "2px"
                        ]
                    },
                    "padding": theme => theme('spacing'),
                    "placeholderColor": theme => theme('colors'),
                    "placeholderOpacity": (theme) => theme('opacity'),
                    "ringColor": (theme) => ({
            DEFAULT: theme('colors.blue.500', '#3b82f6'),
            ...theme('colors'),
        }),
                    "ringOffsetColor": (theme) => theme('colors'),
                    "ringOffsetWidth": {
                        "0": "0px",
                        "1": "1px",
                        "2": "2px",
                        "4": "4px",
                        "8": "8px"
                    },
                    "ringOpacity": (theme) => ({
            DEFAULT: '0.5',
            ...theme('opacity'),
        }),
                    "ringWidth": {
                        "0": "0px",
                        "1": "1px",
                        "2": "2px",
                        "4": "4px",
                        "8": "8px",
                        "DEFAULT": "3px"
                    },
                    "rotate": {
                        "0": "0deg",
                        "1": "1deg",
                        "2": "2deg",
                        "3": "3deg",
                        "6": "6deg",
                        "12": "12deg",
                        "45": "45deg",
                        "90": "90deg",
                        "180": "180deg",
                        "-180": "-180deg",
                        "-90": "-90deg",
                        "-45": "-45deg",
                        "-12": "-12deg",
                        "-6": "-6deg",
                        "-3": "-3deg",
                        "-2": "-2deg",
                        "-1": "-1deg"
                    },
                    "saturate": {
                        "0": "0",
                        "50": ".5",
                        "100": "1",
                        "150": "1.5",
                        "200": "2"
                    },
                    "scale": {
                        "0": "0",
                        "50": ".5",
                        "75": ".75",
                        "90": ".9",
                        "95": ".95",
                        "100": "1",
                        "105": "1.05",
                        "110": "1.1",
                        "125": "1.25",
                        "150": "1.5"
                    },
                    "sepia": {
                        "0": "0",
                        "DEFAULT": "100%"
                    },
                    "skew": {
                        "0": "0deg",
                        "1": "1deg",
                        "2": "2deg",
                        "3": "3deg",
                        "6": "6deg",
                        "12": "12deg",
                        "-12": "-12deg",
                        "-6": "-6deg",
                        "-3": "-3deg",
                        "-2": "-2deg",
                        "-1": "-1deg"
                    },
                    "space": (theme, { negative }) => ({
            ...theme('spacing'),
            ...negative(theme('spacing')),
        }),
                    "stroke": {
                        "current": "currentColor"
                    },
                    "textColor": theme => ({
            ...theme('colors'),
            body: '#282828',
        }),
                    "textOpacity": (theme) => theme('opacity'),
                    "transformOrigin": {
                        "center": "center",
                        "top": "top",
                        "top-right": "top right",
                        "right": "right",
                        "bottom-right": "bottom right",
                        "bottom": "bottom",
                        "bottom-left": "bottom left",
                        "left": "left",
                        "top-left": "top left"
                    },
                    "transitionDelay": {
                        "75": "75ms",
                        "100": "100ms",
                        "150": "150ms",
                        "200": "200ms",
                        "300": "300ms",
                        "500": "500ms",
                        "700": "700ms",
                        "1000": "1000ms"
                    },
                    "transitionDuration": {
                        "75": "75ms",
                        "100": "100ms",
                        "150": "150ms",
                        "200": "200ms",
                        "300": "300ms",
                        "500": "500ms",
                        "700": "700ms",
                        "1000": "1000ms",
                        "DEFAULT": "150ms"
                    },
                    "transitionProperty": {
                        "none": "none",
                        "all": "all",
                        "DEFAULT": "background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter",
                        "colors": "background-color, border-color, color, fill, stroke",
                        "opacity": "opacity",
                        "shadow": "box-shadow",
                        "transform": "transform"
                    },
                    "transitionTimingFunction": {
                        "DEFAULT": "cubic-bezier(0.4, 0, 0.2, 1)",
                        "linear": "linear",
                        "in": "cubic-bezier(0.4, 0, 1, 1)",
                        "out": "cubic-bezier(0, 0, 0.2, 1)",
                        "in-out": "cubic-bezier(0.4, 0, 0.2, 1)"
                    },
                    "translate": (theme, { negative }) => ({
            ...theme('spacing'),
            ...negative(theme('spacing')),
            '1\/2': '50%',
            '1\/3': '33.333333%',
            '2\/3': '66.666667%',
            '1\/4': '25%',
            '2\/4': '50%',
            '3\/4': '75%',
            full: '100%',
            '-1\/2': '-50%',
            '-1\/3': '-33.333333%',
            '-2\/3': '-66.666667%',
            '-1\/4': '-25%',
            '-2\/4': '-50%',
            '-3\/4': '-75%',
            '-full': '-100%',
        }),
                    "width": theme => ({
            auto: 'auto',
            ...theme('spacing'),
            '1\/2': '50%',
            '1\/3': '33.333333%',
            '2\/3': '66.666667%',
            '1\/4': '25%',
            '2\/4': '50%',
            '3\/4': '75%',
            '1\/5': '20%',
            '2\/5': '40%',
            '3\/5': '60%',
            '4\/5': '80%',
            '1\/6': '16.666667%',
            '2\/6': '33.333333%',
            '3\/6': '50%',
            '4\/6': '66.666667%',
            '5\/6': '83.333333%',
            '1\/12': '8.333333%',
            '2\/12': '16.666667%',
            '3\/12': '25%',
            '4\/12': '33.333333%',
            '5\/12': '41.666667%',
            '6\/12': '50%',
            '7\/12': '58.333333%',
            '8\/12': '66.666667%',
            '9\/12': '75%',
            '10\/12': '83.333333%',
            '11\/12': '91.666667%',
            full: '100%',
            screen: '100vw',
        }),
                    "zIndex": {
                        "0": "0",
                        "10": "10",
                        "20": "20",
                        "30": "30",
                        "40": "40",
                        "50": "50",
                        "auto": "auto"
                    }
                }
            }
        }
    ],
    "theme": {
        "extend": []
    },
    "content": [
        ".\/src\/pug\/*.pug",
        ".\/src\/html\/*.html",
        ".\/src\/pages\/*.js",
        ".\/src\/components\/*\/*.js"
    ],
    "plugins": []
};