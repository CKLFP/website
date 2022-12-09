import fs from 'fs'
import { resolve } from 'path'
import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

let host = 'cklfp.dev'

export default defineConfig({
    plugins: [
        laravel({
            input:
                [
                    'resources/sass/cklfp-loader.scss',
                    'resources/sass/welcome-loader.scss',
                    'resources/js/welcome.js',
                    'resources/js/cklfp.js',
                ],
            refresh: true,
        }),
    ],
    server: detectServerConfig(host),
})

function detectServerConfig(host)
{
    let keyPath = resolve(`D:\\CODE.DEV\\SERVIDORES\\Laragon\\etc\\ssl\\Laragon.key`)
    let certificatePath = resolve(`D:\\CODE.DEV\\SERVIDORES\\Laragon\\etc\\ssl\\Laragon.crt`)

    if (!fs.existsSync(keyPath))
    {
        return {}
    }

    if (!fs.existsSync(certificatePath))
    {
        return {}
    }

    return {
        hmr: { host },
        host,
        https: {
            key: fs.readFileSync(keyPath),
            cert: fs.readFileSync(certificatePath),
        },
    }
}
