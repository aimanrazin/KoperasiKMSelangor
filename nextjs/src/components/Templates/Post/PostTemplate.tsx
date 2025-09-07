import { print } from "graphql/language/printer";

import { ContentNode, Post } from "@/gql/graphql";
import { fetchGraphQL } from "@/utils/fetchGraphQL";

import "./styles.scss";
import { PostQuery } from "./PostQuery";

interface TemplateProps {
  node: ContentNode;
}

export default async function PostTemplate({ node }: TemplateProps) {
  const { post } = await fetchGraphQL<{ post: Post }>(print(PostQuery), {
    id: node.databaseId,
  });

  return (
    <article className="post">
      <h1 className="post__title">{post.title}</h1>
      <div className="post__author">By {post.author?.node.name}</div>

      <div
        className={`blog-content post__body`}
        dangerouslySetInnerHTML={{ __html: post.content || "" }}
      />
    </article>
  );
}
