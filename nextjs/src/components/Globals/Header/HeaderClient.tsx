"use client";

import React, { useEffect, useState } from "react";
import Link from "next/link";
import {
  AppBar,
  Toolbar,
  Box,
  Button,
  Typography,
  Container,
  IconButton,
  Drawer,
  List,
  ListItem,
} from "@mui/material";
import MenuIcon from "@mui/icons-material/Menu";
import CloseIcon from "@mui/icons-material/Close";
import { usePathname } from "next/navigation";

interface HeaderClientProps {
  logo?: {
    node?: {
      altText?: string;
      sourceUrl?: string;
    };
  };
  menuItems?: {
    nodes: {
      uri: string;
      target?: string;
      label: string;
    }[];
  };
  cta?: {
    label: string;
    link: string;
  };
}

export default function HeaderClient({
  logo,
  menuItems,
  cta,
}: HeaderClientProps) {
  const [mobileOpen, setMobileOpen] = useState(false);
  const pathname = usePathname();

  useEffect(() => {
    setMobileOpen(false);
  }, [pathname]);

  const handleDrawerToggle = () => {
    setMobileOpen(!mobileOpen);
  };

  const drawer = (
    <Box
      sx={{
        width: 320,
        p: 2,
        height: "100%",
        display: "flex",
        flexDirection: "column",
        justifyContent: "space-between",
      }}
    >
      <Box>
        <Box display="flex" justifyContent="end" alignItems="center">
          <IconButton onClick={handleDrawerToggle}>
            <CloseIcon />
          </IconButton>
        </Box>

        <List>
          {menuItems?.nodes?.map((item, index) => (
            <ListItem key={index}>
              <Link
                href={item.uri || "#"}
                target={item.target || "_self"}
                style={{
                  textDecoration: "none",
                  color: "#333",
                  fontWeight: 500,
                }}
              >
                {item.label}
              </Link>
            </ListItem>
          ))}
        </List>
      </Box>

      <Button
        variant="contained"
        sx={{
          backgroundColor: "#124D25",
          borderRadius: 2,
          textTransform: "none",
          fontWeight: 500,
          "&:hover": { backgroundColor: "#0e3c1d" },
        }}
      >
        Hubungi Kami
      </Button>
    </Box>
  );

  return (
    <React.Fragment>
      <AppBar
        position="fixed"
        // color="transparent"
        elevation={2}
        sx={{
          top: { xs: "none", md: 16 },
          borderRadius: { xs: "none", md: 4 },
          // backgroundColor: "#fff",
          boxShadow: "0 2px 6px rgba(0,0,0,0.1)",
          maxWidth: "var(--content-max-width)",
          margin: "auto",
          right: "unset",
          left: "50%",
          transform: "translateX(-50%)",
          backgroundColor: "rgba(255, 255, 255, 0.9)",
          backdropFilter: "blur(10px)",
          color: "black",
        }}
      >
        <Container maxWidth={false}>
          <Toolbar
            disableGutters
            sx={{
              justifyContent: "space-between",
              px: 3,
            }}
          >
            {/* Left: Logo */}
            <Box display="flex" alignItems="center" gap={1}>
              <Link href={"/"}>
                {logo?.node?.sourceUrl ? (
                  <Box
                    component="img"
                    src={logo.node.sourceUrl}
                    alt={logo.node.altText || "Logo"}
                    sx={{ height: 32 }}
                  />
                ) : (
                  <Typography
                    variant="h6"
                    fontWeight="bold"
                    color="text.primary"
                  >
                    KMFarm
                  </Typography>
                )}
              </Link>
            </Box>

            {/* Center: Navigation */}
            {/* Desktop Menu */}
            <Box
              sx={{
                display: { xs: "none", md: "flex" },
                alignItems: "center",
                gap: 3,
                flexGrow: 1,
                justifyContent: "center",
              }}
            >
              {menuItems?.nodes?.map((item, index) => (
                <Link
                  key={index}
                  href={item.uri || "#"}
                  target={item.target || "_self"}
                  style={{
                    textDecoration: "none",
                    color: "#333",
                    fontWeight: 500,
                  }}
                >
                  <Typography
                    variant="body1"
                    sx={{
                      cursor: "pointer",
                      "&:hover": { color: "green", scale: "1.025" },
                      transition: "color 0.3s ease, transform 0.3s ease",
                    }}
                  >
                    {item.label}
                  </Typography>
                </Link>
              ))}
            </Box>

            {/* CTA Button (Desktop Only) */}
            {/* Right: CTA Button */}
            {cta && (
              <Button
                variant="contained"
                href={cta.link}
                sx={{
                  display: { xs: "none", md: "block" },
                  backgroundColor: "#144b2f",
                  textTransform: "none",
                  px: 3,
                  py: 1,
                  fontWeight: 500,
                  borderRadius: "8px",
                  "&:hover": {
                    backgroundColor: "#0f3a24",
                  },
                }}
              >
                {cta.label}
              </Button>
            )}

            {/* Mobile Menu Button */}
            <IconButton
              sx={{ display: { xs: "block", md: "none" }, color: "black" }}
              onClick={handleDrawerToggle}
            >
              <MenuIcon />
            </IconButton>
          </Toolbar>
        </Container>
      </AppBar>
      <Drawer
        anchor="right"
        open={mobileOpen}
        onClose={handleDrawerToggle}
        PaperProps={{
          sx: {
            borderTopLeftRadius: 16,
            borderBottomLeftRadius: 16,
            backgroundColor: "rgba(255,255,255,0.95)",
            backdropFilter: "blur(8px)",
          },
        }}
      >
        {drawer}
      </Drawer>
    </React.Fragment>
  );
}
