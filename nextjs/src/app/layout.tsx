import { draftMode } from "next/headers";
import { Inter } from "next/font/google";

import "@wordpress/block-library/build-style/style.css"; // Frontend block styles
import "@wordpress/block-library/build-style/theme.css"; // Theme-related styles

import "@/app/globals.css";

import Navigation from "@/components/Globals/Navigation/Navigation";
import { PreviewNotice } from "@/components/Globals/PreviewNotice/PreviewNotice";
import Footer from "@/components/Globals/Footer/Footer";

const inter = Inter({ subsets: ["latin"] });

export default async function RootLayout({
  children,
}: {
  children: React.ReactNode;
}) {
  const { isEnabled } = await draftMode();

  return (
    <html lang="en">
      <body className={inter.className}>
        {isEnabled && <PreviewNotice />}
        <Navigation />
        {children}
        <Footer />
      </body>
    </html>
  );
}
