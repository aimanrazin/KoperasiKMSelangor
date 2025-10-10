"use client";

import React, { ReactNode } from "react";
import { Box } from "@mui/material";

interface PageProps {
  children: ReactNode;
}

const PageWrapper: React.FC<PageProps> = ({ children }) => {
  return (
    <Box
      className="wp-site-blocks wp-content"
      display={"grid"}
      justifyContent={"center"}
      m={3}
      minHeight={"var(--content-min-height)"}
      marginTop={"var(--content-margin-top)"}
    >
      {children}
    </Box>
  );
};

export default PageWrapper;
