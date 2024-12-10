import preset from "../../../../vendor/filament/filament/tailwind.config.preset";

export default {
    presets: [preset],
    content: [
        "./app/Filament/**/*.php",
        "./resources/views/filament/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
    ],
    theme: {
        extend: {
            colors: {
                'primary-theme': {
                    100: "#cfd0d1",
                    200: "#a0a0a3",
                    300: "#707176",
                    400: "#414148",
                    500: "#11121a",
                    600: "#0e0e15",
                    700: "#0a0b10",
                    800: "#07070a",
                    900: "#030405",
                },
            },
        },
    },
};
