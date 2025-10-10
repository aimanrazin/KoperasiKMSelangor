import { print } from "graphql/language/printer";
import { ContentNode, Page } from "@/gql/graphql";
import { fetchGraphQL } from "@/utils/fetchGraphQL";
import { PageQuery } from "./PageQuery";
import DOMPurify from "isomorphic-dompurify";
import "./styles.scss";
import PageWrapper from "@/components/Globals/Page/PageWrapper";
import { sanitizeHTML } from "@/utils/sanitizeHelper";

interface TemplateProps {
  node: ContentNode;
}

export default async function PageTemplate({ node }: TemplateProps) {
  const { page } = await fetchGraphQL<{ page: Page }>(print(PageQuery), {
    id: node.databaseId,
  });

  return (
    <PageWrapper>
      <div
        className={`blog-content page-body`}
        dangerouslySetInnerHTML={{
          __html: sanitizeHTML(page?.content || ""),
        }}
      />
    </PageWrapper>
  );
}
