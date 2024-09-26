<script setup>
import Nav from "@/components/Nav.vue";
import Input from "@/components/ui/input/Input.vue";
import Button from "@/components/ui/button/Button.vue";
import BarChart from "@/components/ui/chart-bar/BarChart.vue";
import Table from "@/components/ui/table/Table.vue";
import TableCaption from "@/components/ui/table/TableCaption.vue";
import TableHeader from "@/components/ui/table/TableHeader.vue";
import TableRow from "@/components/ui/table/TableRow.vue";
import TableHead from "@/components/ui/table/TableHead.vue";
import TableBody from "@/components/ui/table/TableBody.vue";
import TableCell from "@/components/ui/table/TableCell.vue";
import Label from "@/components/ui/label/Label.vue";
import InputNumber from "@/components/inputs/InputNumber.vue";
import Card from "@/components/card/Card.vue";

const data = [
	{
		name: "Jan",
		total: Math.floor(Math.random() * 2000) + 500,
		predicted: Math.floor(Math.random() * 2000) + 500,
	},
	{
		name: "Feb",
		total: Math.floor(Math.random() * 2000) + 500,
		predicted: Math.floor(Math.random() * 2000) + 500,
	},
	{
		name: "Mar",
		total: Math.floor(Math.random() * 2000) + 500,
		predicted: Math.floor(Math.random() * 2000) + 500,
	},
	{
		name: "Apr",
		total: Math.floor(Math.random() * 2000) + 500,
		predicted: Math.floor(Math.random() * 2000) + 500,
	},
	{
		name: "May",
		total: Math.floor(Math.random() * 2000) + 500,
		predicted: Math.floor(Math.random() * 2000) + 500,
	},
	{
		name: "Jun",
		total: Math.floor(Math.random() * 2000) + 500,
		predicted: Math.floor(Math.random() * 2000) + 500,
	},
	{
		name: "Jul",
		total: Math.floor(Math.random() * 2000) + 500,
		predicted: Math.floor(Math.random() * 2000) + 500,
	},
];
</script>

<template>
	<header class="fixed flex w-screen items-center justify-end p-2.5">
		<Nav />
	</header>

	<main class="flex h-screen w-screen items-center justify-center">
		<div
			class="grid h-[90vh] w-[90vw] grid-cols-3 grid-rows-11 gap-2 rounded-xl bg-white p-3.5">
			<div
				class="col-span-3 row-span-2 flex flex-col items-start gap-3.5 rounded-[5px] border-2 p-3.5">
				<div class="flex h-full gap-2">
					<InputNumber
						labelText="Investimento Inicial"
						inputId="inicial"
						inputName="inicial"
						inputPlaceholder="0.00" />
					<InputNumber
						labelText="Investimento Mensal"
						inputId="mensal"
						inputName="mensal"
						inputPlaceholder="0.00" />
					<InputNumber
						labelText="Prazo"
						inputId="prazo"
						inputName="prazo"
						inputPlaceholder="0" />
					<InputNumber
						labelText="Rentabilidade"
						inputId="rentabilidade"
						inputName="rentabilidade"
						inputIcon="%"
						inputPlaceholder="0">
					</InputNumber>
				</div>
				<div class="flex h-auto items-end gap-[5px]">
					<Button variant="secondary"> Secondary</Button>
					<Button>Button</Button>
				</div>
			</div>
			<div class="col-span-full row-span-3 flex justify-between rounded-[5px] border-2 p-3.5">
				<div class="flex w-1/4 items-center">
					<h1 class="text-5xl font-extrabold dark:text-white">Total Investidos:</h1>
				</div>
				<section class="flex w-2/3 items-center justify-around">
					<Card titleCard="Total Investido" valueCard="15.000.34" />
					<Card titleCard="Total Juros" valueCard="13.123,31" />
					<Card titleCard="Total Acumulado" valueCard="567.002,31" />
					<Card titleCard="Total Acumulado" valueCard="31.093,12" />
					<Card titleCard="Total Acumulado" valueCard="2.122" />
					<Card titleCard="Total Acumulado" valueCard="1.234" />
				</section>
			</div>
			<div class="col-span-1 row-span-6 rounded-[5px] border-2 p-3.5">
				<Table>
					<TableCaption>A list of your recent invoices.</TableCaption>
					<TableHeader>
						<TableRow>
							<TableHead class="w-[100px]"> Mês</TableHead>
							<TableHead>Juros</TableHead>
							<TableHead>Investidos</TableHead>
							<TableHead class="text-right">Juros</TableHead>
							<TableHead class="text-right">Acumulado</TableHead>
						</TableRow>
					</TableHeader>
					<TableBody>
						<TableRow>
							<TableCell class="font-medium"> INV001</TableCell>
							<TableCell>Paid</TableCell>
							<TableCell>Credit Card</TableCell>
							<TableCell class="text-right"> $250.00</TableCell>
						</TableRow>
						<TableRow>
							<TableCell class="font-medium"> INV001</TableCell>
							<TableCell>Paid</TableCell>
							<TableCell>Credit Card</TableCell>
							<TableCell class="text-right"> $250.00</TableCell>
						</TableRow>
						<TableRow>
							<TableCell class="font-medium"> INV001</TableCell>
							<TableCell>Paid</TableCell>
							<TableCell>Credit Card</TableCell>
							<TableCell class="text-right"> $250.00</TableCell>
						</TableRow>
						<TableRow>
							<TableCell class="font-medium"> INV001</TableCell>
							<TableCell>Paid</TableCell>
							<TableCell>Credit Card</TableCell>
							<TableCell class="text-right"> $250.00</TableCell>
						</TableRow>
					</TableBody>
				</Table>
			</div>
			<div class="col-span-2 row-span-6 rounded-[5px] border-2">
				<BarChart
					index="name"
					:data="data"
					:categories="['total', 'predicted']"
					:y-formatter="
						(tick, i) => {
							return typeof tick === 'number'
								? `$ ${new Intl.NumberFormat('us').format(tick).toString()}`
								: '';
						}
					"
					:type="'stacked'" />
			</div>
		</div>
	</main>
</template>
<style scoped></style>
