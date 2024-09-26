<script>
import Label from "../ui/label/Label.vue";
import Input from "../ui/input/Input.vue";

export default {
	name: "InputNumber",
	props: {
		labelText: {
			type: String,
			required: true,
		},
		inputIcon: {
			type: String,
			required: false,
			default: "$",
		},
		inputId: {
			type: String,
			required: false,
			default: "",
		},
		inputType: {
			type: String,
			required: false,
			default: "number",
		},
		inputName: {
			type: String,
			required: false,
			default: "",
		},
		inputPlaceholder: {
			type: String,
			required: false,
			default: "",
		},
	},
};
</script>

<template>
	<div class="w-1/7 flex flex-col items-start justify-start">
		<Label :for="forLabel" class="block text-sm font-medium leading-6 text-gray-900">
			{{ labelText }}
		</Label>
		<div class="relative rounded-md bg-amber-700 shadow-sm">
			<div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
				<span class="text-gray-500 sm:text-sm">{{ inputIcon }}</span>
			</div>
			<Input
				:type="inputType"
				:name="inputName"
				:id="inputId"
				:placeholder="inputPlaceholder"
				class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
			<div class="absolute inset-y-0 right-0 flex items-center justify-start">
				<label for="currency" class="sr-only"> Currency </label>
				<select
					:idSelect="idSelect"
					:nameSelect="nameSelect"
					class="h-full rounded-md border-0 bg-transparent py-0 pl-2 pr-7 text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
					<option>BRL</option>
				</select>
			</div>
		</div>
	</div>
</template>
