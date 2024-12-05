/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "class",
  content: [
    "./assets/**/*.{php,js}",
    "./admin/**/*.{php,js}",
    "./*.{php,js}",
    "node_modules/preline/dist/*.js",
  ],
  theme: {
    screens: {
      sm: "480px",
      md: "768px",
      lg: "1024px",
      xl: "1440px",
    },
    colors: {
      primary: "#13141a",
      white: "#ffffff",
      black: "#000000",
      red: {
        100: "#fee2e2",
        500: "#ef4444",
        600: "#ef4444",
        800: "#991b1b",
      },
      pink: "#ff49db",
      orange: "#ff7849",
      green: "#13ce66",
      purple: {
        600: "#9333ea",
      },
      slate: {
        50: "#f8fafc",
        100: "#f1f5f9",
        200: "#e2e8f0",
        300: "#cbd5e1",
        400: "#94a3b8",
        500: "#64748b",
        600: "#475569",
        700: "#334155",
        800: "#1e293b",
        900: "#0f172a",
        950: "#020617",
      },
      gray: {
        50: "#f9fafb",
        100: "#f1f5f9",
        200: "#e5e7eb",
        300: "#d1d5db",
        400: "#9ca3af",
        500: "#6b7280",
        600: "#4b5563",
        700: "#374151",
        800: "#1f2937",
        900: "#111827",
        950: "#030712",
      },
      neutral: {
        200: "#e5e5e5",
        300: "#d4d4d4",
        400: "#a3a3a3",
        500: "#737373",
        600: "#525252",
        700: "#404040",
        800: "#262626",
        900: "#171717",
      },
      blue: {
        200: "#bfdbfe",
        500: "#3b82f6",
        600: "#2563eb",
        700: "#1d4ed8",
      },
      teal: {
        100: "#ccfbf1",
        500: "#14b8a6",
        800: "#115e59",
      },
      yellow: {
        100: "#fef9c3",
        500: "#eab308",
        800: "#854d0e",
      },
    },
    fontFamily: {
      roboto: ["Roboto", "sans-serif"],
    },
    extend: {
      colors: {
        "notification-bg": "#313e2c",
        "notification-primary": "#aaec8a",
      },
      keyframes: {
        "fade-in": {
          "5%": {
            opacity: "1",
            visibility: "visible",
            transform: "translateY(0)",
          },
          "95%": { opacity: "1", transform: "translateY(0)" },
        },
        progress: {
          "100%": { transform: "scaleX(1)" },
        },
      },
      animation: {
        "fade-in": "fade-in 3s linear",
        progress: "progress 2.5s 0.3s linear",
      },
    },
  },
  plugins: [require("preline/plugin")],
};
