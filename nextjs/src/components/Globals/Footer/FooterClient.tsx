"use client";
import { useMemo } from "react";
import DOMPurify from "isomorphic-dompurify";
import { Box, Link, Stack, Typography, Avatar } from "@mui/material";
import { NewMenu } from "./Footer";

export default function FooterClient({
  menuItems,
  copywrite,
}: {
  menuItems: NonNullable<NewMenu["footer"]>["menuItems"] | [];
  copywrite: string;
}) {
  const columnItems = useMemo(() => {
    if (!menuItems) return [];
    return Object.values(menuItems);
  }, [menuItems]);

  const currentYear = useMemo(() => {
    return new Date().getFullYear().toString();
  }, []);

  return (
    <footer className="footer">
      <div className="footer__wrapper">
        <div className="footer__layout">
          {columnItems.map((x: any, index: number) => (
            <div key={index}>
              <Typography
                variant="h6"
                dangerouslySetInnerHTML={{
                  __html: DOMPurify.sanitize(x.title),
                }}
                // component="div"
                color="#fefefe"
                sx={{ marginBlockEnd: "0.75rem", fontSize: "1.125rem" }}
              />
              <Stack spacing={1.5}>
                {x.items.map((item: any, idx: number) => {
                  const cleanLabel = DOMPurify.sanitize(item.label);
                  return (
                    <Link
                      key={idx}
                      href={item.link}
                      // underline="hover"
                      color="#fefefe"
                      display="flex"
                      alignItems="center"
                      gap={1}
                      sx={{
                        "&:hover": { color: "grey" },
                        textDecoration: "none",
                        minWidth: "223px",
                        cursor: "pointer",
                      }}
                    >
                      {/* Optional icon (only if exists) */}
                      {item.icon && (
                        <Avatar
                          src={item.icon?.node?.sourceUrl}
                          alt={item.icon?.node?.altText}
                          sx={{
                            width: 20,
                            height: 20,
                            bgcolor: "transparent",
                            padding: "0.125rem",
                          }}
                        />
                      )}

                      {/* Safe label */}
                      <Typography
                        variant="body2"
                        dangerouslySetInnerHTML={{ __html: cleanLabel }}
                        component="span"
                        textAlign={"center"}
                      />
                    </Link>
                  );
                })}
              </Stack>
            </div>
          ))}
        </div>
        <hr />
        <Box textAlign={"center"}>
          <Typography variant="caption" color="#a5a5a5">
            {copywrite?.replace("{{CURRENT-YEAR}}", currentYear)}
          </Typography>
        </Box>
      </div>
    </footer>
  );
}
