"use strict";

var simplemaps_countrymap_mapdata = {
  main_settings: {
    //General settings
    width: "700", //'700' or 'responsive'
    background_color: "#FFFFFF",
    background_transparent: "yes",
    border_color: "#ffffff",

    //State defaults
    state_description: "State description",
    state_color: "#5D9C59",
    state_hover_color: "#5D9C59",
    state_url: "",
    border_size: 1.5,
    all_states_inactive: "no",
    all_states_zoomable: "yes",

    //Label defaults
    label_color: "#d5ddec",
    label_hover_color: "#d5ddec",
    label_size: 22,
    label_font: "Arial",
    hide_labels: "no",
    hide_eastern_labels: "no",

    //Zoom settings
    zoom: "yes",
    manual_zoom: "no",
    back_image: "no",
    initial_back: "no",
    initial_zoom: "-1",
    initial_zoom_solo: "no",
    region_opacity: 1,
    region_hover_opacity: 0.6,
    zoom_out_incrementally: "yes",
    zoom_percentage: 0.99,
    zoom_time: 0.5,

    //Popup settings
    popup_color: "white",
    popup_opacity: 0.9,
    popup_shadow: 1,
    popup_corners: 5,
    popup_font: "12px/1.5 Verdana, Arial, Helvetica, sans-serif",
    popup_nocss: "no",

    //Advanced settings
    div: "map",
    auto_load: "yes",
    url_new_tab: "no",
    images_directory: "default",
    fade_time: 0.1,
    link_text: "View Website",
    popups: "no",
    state_image_url: "",
    state_image_position: "",
    location_image_url: "",
  },
  state_specific: {
    DZA2143: {
      name: "Adrar",
    },
    DZA2144: {
      name: "Aïn Témouchent",
    },
    DZA2145: {
      name: "Oran",
    },
    DZA2146: {
      name: "Sidi Bel Abbès",
    },
    DZA2147: {
      name: "Tlemcen",
    },
    DZA2148: {
      name: "Béchar",
    },
    DZA2149: {
      name: "Naâma",
    },
    DZA2150: {
      name: "Tindouf",
    },
    DZA2163: {
      name: "Annaba",
    },
    DZA2164: {
      name: "El Tarf",
    },
    DZA2165: {
      name: "Jijel",
    },
    DZA2166: {
      name: "Skikda",
    },
    DZA2188: {
      name: "Illizi",
    },
    DZA2189: {
      name: "Tamanghasset",
    },
    DZA2190: {
      name: "El Bayadh",
    },
    DZA2191: {
      name: "El Oued",
    },
    DZA2192: {
      name: "Ghardaïa",
    },
    DZA2193: {
      name: "Laghouat",
    },
    DZA2194: {
      name: "Ouargla",
    },
    DZA2195: {
      name: "Alger",
    },
    DZA2196: {
      name: "Boumerdès",
    },
    DZA2197: {
      name: "Tizi Ouzou",
    },
    DZA2198: {
      name: "Tipaza",
    },
    DZA2199: {
      name: "Aïn Defla",
    },
    DZA2200: {
      name: "Chlef",
    },
    DZA2201: {
      name: "Mascara",
    },
    DZA2202: {
      name: "Mostaganem",
    },
    DZA2203: {
      name: "Relizane",
    },
    DZA2204: {
      name: "Saïda",
    },
    DZA2205: {
      name: "Tiaret",
    },
    DZA2206: {
      name: "Tissemsilt",
    },
    DZA2207: {
      name: "Bordj Bou Arréridj",
    },
    DZA2208: {
      name: "Béjaïa",
    },
    DZA2209: {
      name: "Blida",
    },
    DZA2210: {
      name: "Bouira",
    },
    DZA2211: {
      name: "Biskra",
    },
    DZA2212: {
      name: "Djelfa",
    },
    DZA2213: {
      name: "Médéa",
    },
    DZA2214: {
      name: "M'Sila",
    },
    DZA2215: {
      name: "Sétif",
    },
    DZA2216: {
      name: "Batna",
    },
    DZA2217: {
      name: "Constantine",
    },
    DZA2218: {
      name: "Guelma",
    },
    DZA2219: {
      name: "Khenchela",
    },
    DZA2220: {
      name: "Mila",
    },
    DZA2221: {
      name: "Oum el Bouaghi",
    },
    DZA2222: {
      name: "Souk Ahras",
    },
    DZA2223: {
      name: "Tébessa",
    },
  },
  locations: {
    0: {
      lat: "36.763056",
      lng: "3.050556",
      name: "Algiers",
    },
  },
  labels: {},
  legend: {
    entries: [],
  },
  regions: {
    0: {
      states: ["DZA2208", "DZA2197", "DZA2210"],
      name: "Kabyle",
      color: "#5D9C59",
      hover_color: "#2F702B",
      zoomable: "no",
    },
    1: {
      states: [
        "DZA2143",
        "DZA2150",
        "DZA2189",
        "DZA2190",
        "DZA2188",
        "DZA2148",
        "DZA2194",
        "DZA2192",
        "DZA2191",
        "DZA2149",
      ],
      name: "Sahara",
      color: "#5D9C59",
      hover_color: "#2F702B",
      zoomable: "no",
    },
    2: {
      states: ["DZA2212", "DZA2193", "DZA2214", "DZA2213"],
      name: "Ouled Naîl",
      color: "#5D9C59",
      hover_color: "#2F702B",
      zoomable: "no",
    },
    3: {
      states: [
        "DZA2195",
        "DZA2196",
        "DZA2209",
        "DZA2198",
        "DZA2199",
        "DZA2200",
      ],
      name: "Algerois",
      color: "#5D9C59",
      hover_color: "#2F702B",
      zoomable: "no",
    },
    4: {
      states: [
        "DZA2216",
        "DZA2221",
        "DZA2219",
        "DZA2211",
        "DZA2223",
        "DZA2222",
      ],
      name: "Chaouia",
      color: "#5D9C59",
      hover_color: "#2F702B",
      zoomable: "no",
    },
    5: {
      states: [
        "DZA2163",
        "DZA2164",
        "DZA2165",
        "DZA2166",
        "DZA2218",
        "DZA2217",
        "DZA2220",
        "DZA2215",
        "DZA2207",
      ],
      name: "East",
      color: "#5D9C59",
      hover_color: "#2F702B",
      zoomable: "no",
    },
    6: {
      states: [
        "DZA2144",
        "DZA2145",
        "DZA2146",
        "DZA2147",
        "DZA2201",
        "DZA2202",
        "DZA2203",
        "DZA2204",
        "DZA2205",
        "DZA2206",
      ],
      name: "West",
      color: "#5D9C59",
      hover_color: "#2F702B",
      zoomable: "no",
    },
    7: {
      states: [],
      zoomable: "no",
    },
  },
};

let title;
let txt;
window.onload = function () {
  title = document.getElementById("main__title");
  txt = document.querySelector(".sec__testimonials--1");
};
