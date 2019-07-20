<template>
    <div class="container">
        <h1 class="product_heading">Product Invoice</h1>
        <tr v-for="(invoice_product, k) in invoice_products" :key="k">
            <td scope="row" class="trashIconContainer">
                <i class="fa fa-trash" aria-hidden="true" @click="deleteRow(k, invoice_product)"></i>
            </td>
            <td>
                <label>#Product Id</label>
                <input class="form-control" type="text" v-model="invoice_product.product_no" />
            </td>
            <td>
                <label>Product Name</label>
                <input class="form-control" type="text" v-model="invoice_product.product_name" />
            </td>
            <td>
                <label>Product Stock</label>
                <input class="form-control text-right" type="number" min="0" 
                v-model="invoice_product.product_stock"/>
            </td>
            <td>
                <label>Product Price</label>
                <input class="form-control text-right" type="number" min="0" step=".01"
                v-model="invoice_product.product_price" @change="calculateLineTotal(invoice_product)" />
            </td>
            <td>
                <label>Total</label>
                <input readonly class="form-control text-right" type="number" min="0" step=".01"
                v-model="invoice_product.line_total" />
            </td>
        </tr>

        <button type='button' class="btn btn-info btn-padding" @click="addNewRow">
           Add
        </button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component Mounted');
        },
        data() {
            return {
                invoice_products: [{
                    product_no: '',
                    product_name: '',
                    product_stock: '',
                    product_price: '',
                    line_total: 0
                }]
            }
        },
        methods: {
            addNewRow() {
                this.invoice_products.push({
                    product_no: '',
                    product_name: '',
                    product_stock: '',
                    product_price: '',
                    line_total: 0
                })
            },
            deleteRow(index, invoice_product) {
                var idx = this.invoice_products.indexOf(invoice_product);
                console.log(idx, index);
                if (idx > -1) {
                    this.invoice_products.splice(idx, 1);
                }
                // this.calculateTotal();
            },

        },
        created() {
            this.csrfToken = document.querySelector('meta[name="csrf-token"]').content
        }
    }
</script>