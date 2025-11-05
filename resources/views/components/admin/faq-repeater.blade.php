@props(['faqs' => []])

<div x-data='{
    faqs: @json($faqs instanceof \Illuminate\Database\Eloquent\Collection ? $faqs->map(function($faq, $index) {
        return [
            "id" => $index,
            "question" => $faq->question,
            "answer" => $faq->answer,
            "is_active" => $faq->is_active
        ];
    })->values()->all() : []) || [],
    nextId: {{ count($faqs) }},
    addFaq() {
        this.faqs.push({
            id: this.nextId++,
            question: "",
            answer: "",
            is_active: true
        });
    },
    removeFaq(id) {
        this.faqs = this.faqs.filter(faq => faq.id !== id);
    }
}'>
    <h4 class="card-title">FAQs</h4>
    <div class="mb-3">
        <template x-for="(faq, index) in faqs" :key="faq.id">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="mb-3">
                                <label class="form-label">Question</label>
                                <input type="text" class="form-control" :name="`faqs[${faq.id}][question]`" x-model="faq.question" placeholder="Enter Question">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Answer</label>
                                <textarea class="form-control" :name="`faqs[${faq.id}][answer]`" x-model="faq.answer" rows="3" placeholder="Enter Answer"></textarea>
                            </div>
                             <div class="mb-3 form-check">
                                <input type="hidden" :name="`faqs[${faq.id}][is_active]`" value="0">
                                <input type="checkbox" class="form-check-input" :name="`faqs[${faq.id}][is_active]`" x-model="faq.is_active" value="1" :id="`faq_is_active_${faq.id}`">
                                <label class="form-check-label" :for="`faq_is_active_${faq.id}`">Active</label>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-danger btn-sm" @click="removeFaq(faq.id)">X</button>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </div>

    <button type="button" class="btn btn-primary" @click="addFaq">Add FAQ</button>
</div>
