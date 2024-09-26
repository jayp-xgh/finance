<script>
export default {
	name: "Card",
	props: {
		titleCard: {
			type: String,
			required: true,
		},
		valueCard: {
			type: [Number, String],
			required: true,
		},
	},
};
</script>

<template>
	<div class="flex flex-col items-center gap-1.5">
		<p>{{ titleCard }}</p>
		<h3 class="rounded bg-black p-7 text-2xl font-bold text-white dark:text-white">
			R$ {{ valueCard }}
		</h3>
	</div>
</template>
