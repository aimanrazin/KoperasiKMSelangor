import type { Metadata } from "next";
import { print } from "graphql/language/printer";

import { setSeoData } from "@/utils/seoData";

import { fetchGraphQL } from "@/utils/fetchGraphQL";
import { ContentNode, Page } from "@/gql/graphql";
import { PageQuery } from "@/components/Templates/Page/PageQuery";
import { SeoQuery } from "@/queries/general/SeoQuery";
import MooNotFound from "../assets/moo-not-found.svg";
import { Box, Button } from "@mui/material";
import Link from "next/link";
import PageWrapper from "@/components/Globals/Page/PageWrapper";

const notFoundPageWordPressId = 10;

export async function generateMetadata(): Promise<Metadata> {
  const { contentNode } = await fetchGraphQL<{ contentNode: ContentNode }>(
    print(SeoQuery),
    { slug: notFoundPageWordPressId, idType: "DATABASE_ID" }
  );

  const metadata = setSeoData({ seo: contentNode.seo });

  return {
    ...metadata,
    alternates: {
      canonical: `${process.env.NEXT_PUBLIC_BASE_URL}/404-not-found/`,
    },
  } as Metadata;
}

export default async function NotFound() {
  const { page } = await fetchGraphQL<{ page: Page }>(print(PageQuery), {
    id: notFoundPageWordPressId,
  });

  return (
    <PageWrapper>
      <Box
        display={"flex"}
        flexDirection={"column"}
        alignItems={"center"}
        textAlign={"center"}
        gap={2}
      >
        <MooNotFound width={300} height={300} />
        <Button
          variant="contained"
          href={"/"}
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
          Back To Homepage
        </Button>
      </Box>
    </PageWrapper>
  );
}
