import { print } from "graphql/language/printer";
import DOMPurify from "isomorphic-dompurify";

import { ContentNode, Post } from "@/gql/graphql";
import { fetchGraphQL } from "@/utils/fetchGraphQL";

import "./styles.scss";
import { PostQuery } from "./PostQuery";
import PageWrapper from "@/components/Globals/Page/PageWrapper";
import { sanitizeHTML } from "@/utils/sanitizeHelper";

interface TemplateProps {
  node: ContentNode;
}

export default async function PostTemplate({ node }: TemplateProps) {
  const { post } = await fetchGraphQL<{ post: Post }>(print(PostQuery), {
    id: node.databaseId,
  });

  return (
    <PageWrapper>
      <article className="post">
        <h1 className="post__title">{post.title}</h1>
        <div className="post__author">By {post.author?.node.name}</div>

        <div
          className={`blog-content post__body`}
          dangerouslySetInnerHTML={{
            __html: sanitizeHTML(post.content || ""),
          }}
        />
      </article>
    </PageWrapper>
  );
}
