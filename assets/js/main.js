(function () {
  const services = {
    repair: {
      label: 'Автоэлектрика и ремонт',
      priceText: 'от 1 000 ₽',
      note: 'Стартовая сумма относится к диагностике. Ремонт согласуется после поиска причины.'
    },
    diagnostics: {
      label: 'Диагностика авто',
      priceText: 'от 1 000 ₽',
      note: 'Подходит, когда нужно понять причину до ремонта и лишних замен.'
    },
    polishing: {
      label: 'Полировка авто',
      priceText: 'после оценки',
      note: 'Стоимость понятна после осмотра состояния ЛКП и объема работ.'
    },
    gbo: {
      label: 'Установка ГБО',
      priceText: 'от 20 000 ₽',
      note: 'Дополнительное направление: смета зависит от комплектации автомобиля и выбранного оборудования.'
    },
    lighting: {
      label: 'Дополнительное освещение',
      priceText: 'от 4 000 ₽',
      note: 'Стоимость зависит от оборудования и сложности подключения.'
    },
    mobile: {
      label: 'Выездная диагностика',
      priceText: 'от 3 000 ₽',
      note: 'Мастер выезжает к автомобилю, если удобнее не ехать в сервис.'
    }
  };

  const serviceSelects = document.querySelectorAll('[data-service-select]');
  const priceOutput = document.querySelector('[data-price-output]');
  const serviceOutput = document.querySelector('[data-service-output]');
  const noteOutput = document.querySelector('[data-note-output]');
  const carCatalog = window.VLASGAS_CAR_CATALOG || {};

  function updateEstimate(serviceKey) {
    if (!priceOutput || !serviceOutput || !noteOutput) {
      return;
    }

    const selected = services[serviceKey] || services.repair;
    priceOutput.textContent = selected.priceText;
    serviceOutput.textContent = selected.label;
    noteOutput.textContent = selected.note;
  }

  function setStatus(form, message, type) {
    const formStatus = form.querySelector('[data-form-status]');
    if (!formStatus) {
      return;
    }

    formStatus.textContent = message;
    formStatus.className = 'mt-4 rounded-md border px-4 py-3 text-sm font-bold';

    if (type === 'success') {
      formStatus.classList.add('border-emerald-400/40', 'bg-emerald-500/10', 'text-emerald-100');
    } else if (type === 'error') {
      formStatus.classList.add('border-red-400/40', 'bg-red-500/10', 'text-red-100');
    } else {
      formStatus.classList.add('border-copper-400/40', 'bg-copper-500/10', 'text-orange-100');
    }
  }

  function validateForm(formData) {
    const required = ['service', 'problem', 'phone'];
    const missing = required.some((name) => !String(formData.get(name) || '').trim());

    if (missing) {
      return 'Заполните услугу, проблему и телефон.';
    }

    if (formData.get('personal_data_consent') !== 'yes' || formData.get('privacy_policy_consent') !== 'yes') {
      return 'Подтвердите согласие на обработку персональных данных и политику обработки персональных данных.';
    }

    const phoneDigits = String(formData.get('phone') || '').replace(/\D/g, '');
    if (phoneDigits.length < 10 || phoneDigits.length > 15) {
      return 'Укажите телефон в корректном формате.';
    }

    return '';
  }

  function setupCarSelectors() {
    document.querySelectorAll('[data-estimate-form]').forEach((form) => {
      const brandSelect = form.querySelector('[data-car-brand]');
      const modelSelect = form.querySelector('[data-car-model]');
      const customModelInput = form.querySelector('[data-car-model-custom]');
      const combinedInput = form.querySelector('[data-car-combined]');

      if (!brandSelect || !modelSelect || !combinedInput) {
        return;
      }

      function updateCombinedValue() {
        const brand = brandSelect.value.trim();
        const model = modelSelect.value === '__custom__'
          ? String(customModelInput ? customModelInput.value : '').trim()
          : modelSelect.value.trim();
        combinedInput.value = [brand, model].filter(Boolean).join(' ');
      }

      function updateCustomModelState() {
        if (!customModelInput) {
          updateCombinedValue();
          return;
        }

        const isCustom = modelSelect.value === '__custom__';
        customModelInput.classList.toggle('hidden', !isCustom);
        customModelInput.disabled = !isCustom;

        if (!isCustom) {
          customModelInput.value = '';
        }

        updateCombinedValue();
      }

      function renderModels() {
        const brand = brandSelect.value;
        const models = carCatalog[brand] || [];

        modelSelect.innerHTML = '';

        const placeholder = document.createElement('option');
        placeholder.value = '';
        placeholder.textContent = brand ? 'Выберите модель' : 'Сначала выберите марку';
        modelSelect.appendChild(placeholder);

        models.forEach((model) => {
          const option = document.createElement('option');
          option.value = model;
          option.textContent = model;
          modelSelect.appendChild(option);
        });

        if (brand) {
          const customOption = document.createElement('option');
          customOption.value = '__custom__';
          customOption.textContent = 'Другая модель';
          modelSelect.appendChild(customOption);
        }

        modelSelect.disabled = !brand;
        updateCustomModelState();
      }

      brandSelect.addEventListener('change', renderModels);
      modelSelect.addEventListener('change', updateCustomModelState);
      if (customModelInput) {
        customModelInput.addEventListener('input', updateCombinedValue);
      }
      form.addEventListener('reset', () => window.setTimeout(renderModels, 0));
      renderModels();
    });
  }

  function setupReveal() {
    const canAnimate = window.matchMedia('(min-width: 768px)').matches &&
      window.matchMedia('(prefers-reduced-motion: no-preference)').matches;

    if (!canAnimate || !('IntersectionObserver' in window)) {
      return;
    }

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.18 });

    document.querySelectorAll('[data-reveal]').forEach((element) => observer.observe(element));
  }

  serviceSelects.forEach((select) => {
    select.addEventListener('change', () => updateEstimate(select.value));
  });

  if (serviceSelects[0]) {
    updateEstimate(serviceSelects[0].value);
  }

  document.querySelectorAll('[data-estimate-form]').forEach((form) => {
    form.addEventListener('submit', async function (event) {
      event.preventDefault();

      const formData = new FormData(form);
      const error = validateForm(formData);
      const submitButton = form.querySelector('button[type="submit"]');
      const initialButtonText = submitButton ? submitButton.textContent : '';

      if (error) {
        setStatus(form, error, 'error');
        return;
      }

      if (submitButton) {
        submitButton.disabled = true;
        submitButton.textContent = 'Отправляем...';
      }
      setStatus(form, 'Отправляем заявку. Обычно это занимает несколько секунд.', 'info');

      try {
        const response = await fetch(form.action, {
          method: 'POST',
          body: formData,
          headers: {
            Accept: 'application/json'
          }
        });
        const result = await response.json();

        if (!response.ok || !result.ok) {
          throw new Error(result.error || 'Не удалось отправить заявку.');
        }

        form.reset();
        if (serviceSelects[0]) {
          updateEstimate(serviceSelects[0].value);
        }
        setStatus(form, 'Заявка отправлена. VlasGas свяжется с вами по указанному телефону.', 'success');
      } catch (requestError) {
        setStatus(form, requestError.message || 'Не удалось отправить заявку. Позвоните по номеру +7 (927) 519-01-33.', 'error');
      } finally {
        if (submitButton) {
          submitButton.disabled = false;
          submitButton.textContent = initialButtonText;
        }
      }
    });
  });

  setupCarSelectors();
  setupReveal();
})();
