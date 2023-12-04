<template v-if="bedrooms.length > 0">
    <div class="row mb-4">
        <div class="col-12">
            <div class="form-label"><strong>Step 2: How big is your home?</strong></div>
        </div>
        <div class="col-lg-6 mb-4">
            <select class="form-select" v-model="bedroom_selected" v-on:change="onChangeBedrooms()">
                <option disabled value="0">-- Number of bedrooms --</option>
                <option v-for="bedroom in bedrooms" :value="bedroom.id" :key="bedroom.id">
                    @{{ bedroom.name }}
                </option>
            </select>
        </div>
        <div class="col-lg-6 mb-4">
            <select class="form-select" v-model="storey_selected" v-on:change="onChangeStoreys()">
                <option disabled value="0">-- Number of storeys --</option>
                <option v-for="storey in storeys" :value="storey.quantity" :key="storey.quantity">
                    @{{ storey.label }}
                </option>
            </select>
        </div>
        <div class="col-lg-12 mb-4">
            <select class="form-select" v-model="bathroom_selected" v-on:change="onChangeBathRooms
                                ()">
                <option disabled value="0">-- Number of bathrooms --</option>
                <option v-for="bathroom in bathrooms" :value="bathroom.quantity" :key="bathroom
                                    .quantity">
                    @{{ bathroom.label }}
                </option>
            </select>
        </div>
    </div>
</template>