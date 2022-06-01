import { Node, mergeAttributes } from "@tiptap/core";

const FilamentBlock = Node.create({
  name: "filament_block",
  group: "block",
  atom: true,
  draggable: true,
  addOptions() {
    return {
      HTMLAttributes: {
        class: "filament-block",
      },
    };
  },
  addAttributes() {
    return {
      type: {
        default: null,
      },
      data: {
        default: null,
      },
    };
  },
  parseHTML() {
    return [
      {
        tag: "filament-block",
      },
    ];
  },
  renderHTML({ node }) {
    return ["filament-block", this.options.HTMLAttributes];
  },
  addNodeView() {
    return ({ editor, node, getPos, HTMLAttributes, decorations, extension }) => {
      console.log(node.attrs);
      const dom = document.createElement("div");
      dom.classList.add("filament-block");

      const title = `
        <div class="filament-block-title">
            <p>${node.attrs.type}</p>
            <button x-on:click="$dispatch('open-modal', {
                id: 'filament-tiptap-editor-block-modal',
                action: 'edit',
                type: '${node.attrs.type}',
                data: '${encodeURIComponent(JSON.stringify(node.attrs.data))}'
            });">Edit</button>
        </div>
      `;
      dom.innerHTML += title;

      let data = "";

      Object.entries(node.attrs.data).map(([key, value]) => {
        data += `<dt>${key}</dt><dd>${value}</dd>`;
      });

      const content = `
        <div class="filament-block-content">
            <dl>
                ${data}
            </dl>
        </div>
      `;
      dom.innerHTML += content;

      return {
        dom,
      };
    };
  },
  addCommands() {
    return {
      setBlock:
        (attributes) =>
        ({ tr, dispatch }) => {
          const { selection } = tr;
          const node = this.type.create({ type: attributes.data.type, data: attributes.data.attributes });

          if (dispatch) {
            tr.replaceRangeWith(selection.from, selection.to, node);
          }

          return true;
        },
    };
  },
});

export default FilamentBlock;
