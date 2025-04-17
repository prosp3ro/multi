<template>
  <section class="p-6">
    <header>
      <h1 class="font-bold text-lg">Multi</h1>

      <nav class="ml-6 mt-3 font-light text-sm">
        <ul class="list-disc">
          <li>
            <Link href="/" class="text-blue-500 hover:underline">
              Index
            </Link>
          </li>
          <li>
            <Link class="text-blue-500 hover:underline">
              Instances
            </Link>
          </li>
        </ul>
      </nav>
    </header>
  </section>

  <section class="p-6">
    <slot />
  </section>
</template>
