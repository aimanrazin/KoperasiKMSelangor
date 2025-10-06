import Link from "next/link";
import { print } from "graphql/language/printer";
import "./styles.scss";

import { Menu } from "@/gql/graphql";
import { fetchGraphQL } from "@/utils/fetchGraphQL";
import gql from "graphql-tag";
import { useMemo } from "react";
import FooterClient from "./FooterClient";

export interface NewMenu extends Menu {
  footer?: {
    copywrite: string;
    menuItems: {
      col1: {
        title: string;
        items: {
          icon: {
            node: {
              altText: string;
              sourceUrl: string;
            };
          };
        }[];
      };
      col2: {
        items: {
          label: string;
          link: string;
        }[];
        title: string;
      };
      col3: {
        items: {
          label: string;
          link: string;
        };
        title: string;
      }[];
    };
  };
}

async function getData() {
  const menuQuery = gql`
    query MenuQuery {
      menu(id: "FOOTER_MENU", idType: LOCATION) {
        footer {
          copywrite
          menuItems {
            col1 {
              title
              items {
                icon {
                  node {
                    altText
                    sourceUrl
                  }
                }
                label
              }
            }
            col2 {
              items {
                label
                link
              }
              title
            }
            col3 {
              items {
                label
                link
              }
              title
            }
          }
        }
      }
    }
  `;

  const data = await fetchGraphQL<{ menu: NewMenu | null }>(print(menuQuery));

  if (!data?.menu) {
    throw new Error("Failed to fetch data");
  }

  return data.menu;
}

export default async function Footer() {
  const { footer } = await getData();

  return (
    <FooterClient
      menuItems={footer?.menuItems ?? []}
      copywrite={footer?.copywrite ?? ""}
    />
  );
}
