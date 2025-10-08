import Link from "next/link";
import { print } from "graphql/language/printer";

import styles from "./Navigation.module.css";

import { Menu, MenuItem, RootQueryToMenuItemConnection } from "@/gql/graphql";
import { fetchGraphQL } from "@/utils/fetchGraphQL";
import gql from "graphql-tag";
import HeaderClient from "./HeaderClient";

export type NewHeaderMenu = Menu & {
  header?: {
    cta?: {
      label: string;
      link: string;
    };
    logo?: {
      node?: {
        altText: string;
        sourceUrl: string;
      };
    };
  };
  menuItems?: {
    nodes: {
      uri: string;
      target: string;
      label: string;
    }[];
  };
};

async function getData() {
  const menuQuery = gql`
    query MenuQuery {
      menu(id: "PRIMARY_MENU", idType: LOCATION) {
        header {
          cta {
            label
            link
          }
          logo {
            node {
              altText
              sourceUrl
            }
          }
        }
        menuItems {
          nodes {
            uri
            target
            label
          }
        }
      }
    }
  `;

  const data = await fetchGraphQL<{ menu: NewHeaderMenu | null }>(
    print(menuQuery)
  );

  if (!data?.menu) {
    throw new Error("Failed to fetch header menu");
  }

  return data.menu;
}

export default async function Navigation() {
  const { header, menuItems } = await getData();
  return (
    <HeaderClient cta={header?.cta} logo={header?.logo} menuItems={menuItems} />
  );
}
