<?php

$rv_oxyniti = [
    "id" => "oxyniti",
    "title" => "Oxyniti nano-bubble generators",
    "is_new" => true,
    "intro" => "Oxyniti generators mix oxygen from a PSA concentrator or an oxygen cylinder into water through a stainless-steel mixer. Two models: 1.5 HP and 4 HP.",
    "source_url" => "https://www.oxyniti.com/products",
    "source_note" => "Specifications as published by Oxyniti on oxyniti.com, November 2026. Product images are illustrative.",
    "plume" => "assets/rv/img/oxyniti-plume.webp",
    "applications" => ["Aquaculture ponds", "Hydroponics and fertigation", "Wastewater aeration", "R&D and pilot-scale water systems"],
    "models" => [
        [
            "name" => "Nano Bubble Generator 1.5 HP",
            "img" => "assets/rv/img/oxyniti-1-5hp.webp",
            "url" => "https://www.oxyniti.com/product/nano-bubble-generator-1.5-HP",
            "summary" => [
                ["Oxygen input", "Up to 2 LPM"],
                ["Power", "1.5 HP, 3-phase, 440 V"],
                ["Connections", "1–1.5 inch typical"],
            ],
            "specs" => [
                "Pump and motor" => [
                    ["Pump model", "CRI MHC series"],
                    ["Pump type", "Stainless-steel horizontal multistage centrifugal pump"],
                    ["Power rating", "1.5 HP, 3-phase, 440 V"],
                    ["Motor", "Copper winding, thermal protection, Class F insulation, IP44 enclosure"],
                    ["Maximum liquid temperature", "+65 °C"],
                    ["Maximum suction lift", "1.5 m"],
                    ["Operating ambient temperature", "Up to +40 °C"],
                ],
                "Oxygen input and gas handling" => [
                    ["Oxygen input capacity", "Up to 2 LPM"],
                    ["Compatible with", "PSA oxygen concentrator or oxygen cylinder"],
                    ["Mixer", "Stainless-steel gas–liquid mixer"],
                ],
                "Nano-bubbles" => [
                    ["Bubble size", "Typically under 100 nm"],
                    ["Duty", "Continuous aeration in aquaculture and water treatment"],
                ],
                "Connections" => [
                    ["Inlet and outlet", "Made to order; commonly 1–1.5 inch"],
                ],
            ],
            "applications" => ["Aquaculture ponds", "Hydroponics and horticulture fertigation", "Small-to-medium wastewater aeration units", "R&D and pilot-scale water systems"],
        ],
        [
            "name" => "Nano Bubble Generator 4 HP",
            "img" => "assets/rv/img/oxyniti-4hp.webp",
            "url" => "https://www.oxyniti.com/product/nano-bubble-generator-4-hp",
            "summary" => [
                ["Oxygen input", "Up to 6 LPM"],
                ["Power", "4 HP, 3-phase, 440 V"],
                ["Connections", "1.5–2 inch typical"],
            ],
            "specs" => [
                "Pump and motor" => [
                    ["Pump model", "CRI MHS-16"],
                    ["Pump type", "Stainless-steel horizontal multistage high-flow pump, for higher circulation rates and large water bodies"],
                    ["Power rating", "4 HP, 3-phase, 440 V"],
                    ["Motor", "Copper winding, thermal protection, Class F insulation, IP44 enclosure"],
                    ["Maximum liquid temperature", "+85 °C"],
                    ["Maximum suction lift", "1.5 m"],
                ],
                "Oxygen input and gas handling" => [
                    ["Oxygen input capacity", "Up to 6 LPM"],
                    ["Mixer", "Integrated stainless-steel nano-bubble mixer"],
                ],
                "Nano-bubbles" => [
                    ["Bubble size", "Typically under 100 nm"],
                    ["Duty", "Large ponds, industrial water systems and high-BOD treatment"],
                ],
                "Connections" => [
                    ["Inlet and outlet", "Customisable; typically 1.5–2 inch"],
                ],
            ],
            "applications" => ["Commercial aquaculture (shrimp, fish)", "Industrial wastewater treatment", "Lake and pond remediation", "Large-scale hydroponics and agri-tech systems"],
        ],
    ],
];

$rv_gloveboxes = [
    "id" => "gloveboxes",
    "title" => "Glove boxes & accessories",
    "intro" => "Standard and custom inert-atmosphere glove boxes, purification, accessories, integrated equipment, service and training.",
    "items" => [
        ["name" => "Standard glove boxes", "img" => "assets/rv/img/cat-glovebox.webp", "anchor" => "standard"],
        ["name" => "Custom glove boxes", "img" => "assets/rv/img/cat-custom-glovebox.webp", "anchor" => "custom"],
        ["name" => "Gas & solvent purifiers", "img" => "assets/rv/img/cat-gas-solvent.webp", "anchor" => "solventgas"],
        ["name" => "Accessories", "img" => "assets/rv/img/cat-accessories.webp", "anchor" => "accessories"],
    ],
];

$rv_optomechanics = [
    "id" => "optomechanics",
    "title" => "Optomechanics",
    "intro" => "Mounts, bases and stages for holding and positioning optical components. Each part has a brochure with dimensions and specifications.",
    "items" => [
        ["name" => "Lens mount, 12.8 mm", "img" => "assets/rv/img/p-lens-mount.webp", "pdf" => "assets/downloads/12.8mm Fixed Lens Mount Brochure RGB.pdf"],
        ["name" => "Lens mount, 25 mm", "img" => "assets/rv/img/p-lens-mount-25.webp", "pdf" => "assets/downloads/Fixed Lens Mount Brochure RGB.pdf"],
        ["name" => "Kinematic mount for circular optics, 12.5 mm", "img" => "assets/rv/img/p-kinematic-12.webp", "pdf" => "assets/downloads/Kinematic Mount Brochure RGB.pdf"],
        ["name" => "Kinematic mount for circular optics, 25 mm", "img" => "assets/rv/img/p-kinematic-25.webp", "pdf" => "assets/downloads/Kinematic Mount Brochure RGB.pdf"],
        ["name" => "Linear mounting base", "img" => "assets/rv/img/p-linear-base.webp", "pdf" => "assets/downloads/Linear Mount Base Brochure RGB.pdf"],
        ["name" => "Manual rotation stage", "img" => "assets/rv/img/p-rotation-stage.webp", "pdf" => "assets/downloads/Manual Rotation Stage Brochure RGB.pdf"],
        ["name" => "Radial mounting base", "img" => "assets/rv/img/p-radial-base.webp", "pdf" => "assets/downloads/Radial Mount Base Brochure RGB.pdf"],
        ["name" => "Spatial filter mount", "img" => "assets/rv/img/p-spatial-filter.webp", "pdf" => "assets/downloads/Spatial Filter Mount Brochure RGB.pdf"],
        ["name" => "Unmounted iris diaphragm, 12 mm", "img" => "assets/rv/img/p-iris-12.webp", "pdf" => "assets/downloads/Unmounted Iris Diaphragm 12mm Brochure RGB.pdf"],
        ["name" => "Unmounted iris diaphragm, 26 mm", "img" => "assets/rv/img/p-iris-26.webp", "pdf" => "assets/downloads/Unmounted Iris Diaphragm 26mm Brochure RGB.pdf"],
    ],
];

$rv_rnd = [
    "id" => "randd",
    "title" => "R&D equipment",
    "intro" => "Measurement devices and laboratory equipment.",
    "items" => [
        [
            "name" => "Digital Pirani vacuum gauge",
            "img" => "assets/rv/img/p-pirani.webp",
            "pdf" => "assets/downloads/DIGITAL-PIRANI-VACCUM-GAUGE.pdf",
            "features" => ["Real-time read-out", "Filament voltage, current and emission current monitored in real time via RS485", "Built-in electrometer"],
        ],
        [
            "name" => "Potentiostat",
            "img" => "assets/rv/img/p-potentiostat.webp",
            "features" => [],
        ],
        [
            "name" => "Precision motorised 2-axis stage",
            "img" => "assets/rv/img/p-2axis-stage.webp",
            "pdf" => "assets/downloads/Precision-Motorised-2-Axis-Stage_Reviun.pdf",
            "features" => ["Controlled X and Y movement", "Manually adjusted Z", "Computer-controlled software", "Touch-screen interface", "High-precision optical encoder"],
        ],
    ],
    "also" => [
        ["name" => "UV-ozone cleaner", "pdf" => "assets/downloads/UV-Ozone-cleaner_Reviun_V2.pdf"],
        ["name" => "UV exposure unit (Photon Curer)", "pdf" => "assets/downloads/Photon-Curer_Reviun_V2.pdf"],
        ["name" => "Fume hood and laminar flow bench"],
        ["name" => "Freezer"],
        ["name" => "XYZ stage"],
    ],
];

$rv_tools = [
    "id" => "tools",
    "title" => "Tools & dies",
    "intro" => "Tools and dies shape parts from small components to large assemblies. We design and make them for a range of industries.",
    "img" => "assets/rv/img/cat-tools-dies.webp",
    "items" => [
        ["name" => "Progressive dies", "text" => "Multi-stage tools for parts from simple components to complex assemblies. Used in automotive, electronics and appliances."],
        ["name" => "Forming dies", "text" => "Shape and form metal and plastic parts. Used in aerospace, medical and construction."],
        ["name" => "Punch and die sets", "text" => "Punch holes and shapes in metal and other materials. Used in stamping, metal fabrication and plastics."],
        ["name" => "Custom dies", "text" => "Designed with you to your requirements and specifications."],
    ],
];
