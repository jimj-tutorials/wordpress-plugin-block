# wordpress-plugin-block
How to create a plugin for a Gutenberg block.

---
## Requirements

- Docker
- `npm`
- `node`

---
## Install the repository

1. Clone the repository
```sh
git clone https://github.com/jimj-tutorials/wordpress-plugin-block.git
```

2. Install `npm` dependencies
```sh
npm install
```

3. Start the **Docker** container
```sh
npm run wp-env start
```

4. Watch `src` directory and block files
```sh
npm run start
```

5. Build `src` directory and block files for **production**
```sh
npm run build
```

---
## Documentation and links

- [`@wordpress/env documentation`](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-env/)
- [`@wordpress/scripts documentation`](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/)
- [`@wordpress/create-block documentation`](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-create-block/)
