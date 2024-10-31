export const fetchMetrics = async () => {
  const config = useRuntimeConfig();

  const response = await $fetch(`${config.public.apiUrl}/metrics`);
  return response as Metrics;
};
