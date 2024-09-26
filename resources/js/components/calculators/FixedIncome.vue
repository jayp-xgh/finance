<script setup lang='ts'>
import {
    Card,
    CardContent,
    CardFooter,
    CardHeader,
    CardTitle,
} from '@/components/ui/card'
import {
    Select,
} from '@/components/ui/select'
import {
    HoverCard,
    HoverCardContent,
    HoverCardTrigger,
} from '@/components/ui/hover-card'
import { Input } from '@/components/ui/input'
import { Label } from '@/components/ui/label'
import { Button } from '@/components/ui/button'
import { Separator } from "@/components/ui/separator";
import { RadioGroup, RadioGroupItem }  from "@/components/ui/radio-group";

import { ref } from 'vue';

const investimentoInicial = ref(0);
const investimentoMensal = ref(0);
const tempo = ref(0);
const rentabilidade = ref(0);
const resultado = ref(null);

const calcularRendaFixa = () => {
    const p = parseFloat(investimentoInicial.value);
    const m = parseFloat(investimentoMensal.value);
    const t = parseInt(tempo.value);
    const r = parseFloat(rentabilidade.value) / 100;
    console.log('p:', p, 'm:', m, 't:', t, 'r:', r)
    let valorFuturo = p * Math.pow(1 + r, t);

    for (let i = 1; i <= t; i++) {
        valorFuturo += m * Math.pow(1 + r, t - i);
    }
    console.log('valor:', resultado.value)
    resultado.value = valorFuturo;
};
</script>

<template class="flex">
    <Card class="w-[600px]">
        <CardHeader>
            <CardTitle>Calcular Renda Fixa</CardTitle>
            <p class="text-sm text-muted-foreground">
                An open-source UI component library.
            </p>
        </CardHeader>
        <CardContent>
            <form  @submit.prevent="calcularRendaFixa"
                   class="flex items-center justify-center gap-5 flex-col">
                    <div class="w-full flex flex-col items-start">
                        <HoverCard>
                            <HoverCardTrigger as-child>
                                <Button variant="link" class="p-0 text-zinc-800">
                                    Qual é o Tipo de Investimento?
                                </Button>
                            </HoverCardTrigger>
                            <HoverCardContent class="w-80">
                                <div class="flex justify-between space-x-4">
                                    <Avatar>
                                        <AvatarImage src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtUGkAzLJ-zFZGX6EfrchYfluOZ9n2eIpoFw&s" />
                                        <AvatarFallback>VC</AvatarFallback>
                                    </Avatar>
                                    <div class="space-y-1">
                                        <h4 class="text-sm font-semibold">
                                            @fundos de investimento
                                        </h4>
                                        <p class="text-sm">
                                            O simulador separa os investimentos em dois tipos baseado no critério de tributação. Enquanto as LCIs e LCAs são isentas de imposto de renda, os demais ativos seguem a tabela regressiva.
                                        </p>
                                        <div class="flex items-center pt-2">
                                            <CalendarIcon class="mr-2 h-4 w-4 opacity-70" />
                                            <span class="text-xs text-muted-foreground">
                                              Joined January 2014
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </HoverCardContent>
                        </HoverCard>

                        <RadioGroup default-value="option-one" class="flex">
                            <div class="flex items-center space-x-2">
                                <RadioGroupItem id="option-one" value="option-one" />
                                <p class="text-sm text-muted-foreground" for="option-one">CDB/LC/Títulos públicos/Debêntures</p>
                            </div>
                            <div class="flex items-center space-x-2">
                                <RadioGroupItem id="option-two" value="option-two" />
                                <p class="text-sm text-muted-foreground" for="option-two">LCI/LCA</p>
                            </div>
                            <div class="flex items-center space-x-2">
                                <RadioGroupItem id="option-tree" value="option-tree" />
                                <p class="text-sm text-muted-foreground" for="option-tree">Tesouro</p>
                            </div>
                        </RadioGroup>
                    </div>
                    <div class="w-full flex flex-col items-start gap-2">
                        <HoverCard>
                            <HoverCardTrigger as-child>
                                <Button variant="link" class="p-0 text-zinc-800">
                                    PRÉ fixado ou PÓS fixado?
                                </Button>
                            </HoverCardTrigger>
                            <HoverCardContent class="w-80">
                                <div class="flex justify-between space-x-4">
                                    <Avatar>
                                        <AvatarImage src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtUGkAzLJ-zFZGX6EfrchYfluOZ9n2eIpoFw&s" />
                                        <AvatarFallback>VC</AvatarFallback>
                                    </Avatar>
                                    <div class="space-y-1">
                                        <h4 class="text-sm font-semibold">
                                            @fundos de investimento
                                        </h4>
                                        <p class="text-sm">
                                            O simulador separa os investimentos em dois tipos baseado no critério de tributação. Enquanto as LCIs e LCAs são isentas de imposto de renda, os demais ativos seguem a tabela regressiva.
                                        </p>
                                        <div class="flex items-center pt-2">
                                            <CalendarIcon class="mr-2 h-4 w-4 opacity-70" />
                                            <span class="text-xs text-muted-foreground">
                                              Joined January 2014
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </HoverCardContent>
                        </HoverCard>

                        <RadioGroup default-value="option-one" class="flex">
                            <div class="flex items-center space-x-2">
                                <RadioGroupItem id="option-one" value="option-one" />
                                <p class="text-sm text-muted-foreground" for="option-one">Pré</p>
                            </div>
                            <div class="flex items-center space-x-2">
                                <RadioGroupItem id="option-two" value="option-two" />
                                <p class="text-sm text-muted-foreground" for="option-two">Pós</p>
                            </div>
                            <div class="flex items-center space-x-2">
                                <RadioGroupItem id="option-tree" value="option-tree" />
                                <p class="text-sm text-muted-foreground" for="option-tree">IPCA</p>
                            </div>
                        </RadioGroup>
                    </div>
                <Separator label="Valores"/>

                <div class="grid items-center w-full gap-4">
                    <div class="flex justify-between">
                        <div class="flex flex-col space-y-1.5 w-5/12">
                            <Label for="investimentoInicial">Investimento Inicial</Label>
                            <Input
                                v-model="investimentoInicial"
                                id="investimentoInicial"
                                placeholder="0,00"/>
                        </div>
                        <div class="flex flex-col space-y-1.5 w-5/12">
                            <Label for="investimentoMensal">Investimento Mensal</Label>
                            <Input
                                v-model="investimentoMensal"
                                id="investimentoMensal"
                                placeholder="0,00"/>
                        </div>
                    </div>

                    <Separator label="Tempo"/>

                    <div class="flex justify-between">
                        <div class="w-5/12">
                            <label for="tempo" class="block text-sm font-medium leading-6 text-gray-900">Tempo de Investimento</label>
                            <div class="relative mt-2 rounded-md shadow-sm">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <span class="text-gray-500 sm:text-sm">$</span>
                                </div>
                                <Input
                                    v-model="tempo"
                                    id="tempo"
                                    type="text"
                                    name="tempo"
                                    class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                    placeholder="0.00" />
                                <div class="absolute inset-y-0 right-0 flex items-center">
                                    <label for="currency" class="sr-only">Currency</label>
                                    <select id="currency" name="currency" class="h-full rounded-md border-0 bg-transparent py-0 pl-2 pr-7 text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                                        <option>Mensal</option>
                                        <option>Anual</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="w-5/12">
                            <label for="rentabilidade" class="block text-sm font-medium leading-6 text-gray-900">Rentabilidade</label>
                            <div class="relative mt-2 rounded-md shadow-sm">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <span class="text-gray-500 sm:text-sm">$</span>
                                </div>
                                <Input
                                    v-model="rentabilidade"
                                    id="rentabilidade"
                                    type="text"
                                    name="rentabilidade"
                                    class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                    placeholder="0.00" />
                                <div class="absolute inset-y-0 right-0 flex items-center">
                                    <label for="currency" class="sr-only">Currency</label>
                                    <select id="currency" name="currency" class="h-full rounded-md border-0 bg-transparent py-0 pl-2 pr-7 text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                                        <option>Mensal</option>
                                        <option>Anual</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <CardFooter class="flex justify-between px-6 pb-6">
                <Button variant="outline">
                    Limpar Campos
                </Button>
                <Button type="submit">Calcular</Button>
            </CardFooter>
            </form>
        </CardContent>
    </Card>
</template>
