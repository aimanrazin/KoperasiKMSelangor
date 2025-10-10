import DOMPurify from "isomorphic-dompurify";

/**
 * Sanitize HTML content safely for SSR and client.
 * - Allows <iframe> with common attributes
 * - Preserves links with target="_blank"
 * - Works the same on server and client (SSR safe)
 */
export const sanitizeHTML = (html: string): string => {
  if (!html) return "";

  // Step 1: sanitize with DOMPurify
  const sanitized = DOMPurify.sanitize(html, {
    ADD_TAGS: ["iframe"],
    ADD_ATTR: [
      "allow",
      "allowfullscreen",
      "frameborder",
      "scrolling",
      "src",
      "width",
      "height",
      "style",
      "loading",
      "referrerpolicy",
      "target",
      "rel",
    ],
  });

  // Step 2: fix target="_blank" links to add rel="noopener noreferrer"
  // Regex is safe since we only operate on trusted CMS content
  const fixedLinks = sanitized.replace(
    /<a\s+([^>]*?)target="_blank"([^>]*)>/gi,
    (_, p1, p2) => `<a ${p1} target="_blank" rel="noopener noreferrer"${p2}>`
  );

  return fixedLinks;
};
