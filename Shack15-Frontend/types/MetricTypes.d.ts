export default {};

declare global {
  /**
   * @description This interface is used to define the metrics object
   * @interface Metrics
   * @path types/MetricTypes.d.ts
   * @note it is globally declared
   */
  interface Metrics {
    id: number;
    total_members: number;
    active_members: number;
    events: Events[];
  }

  /**
   * @description This interface is used to define the events object
   * @interface Events
   * @path types/MetricTypes.d.ts
   * @note it is globally declared
   */
  interface Events {
    name: string;
    attendance: number;
    engagement: number;
    date: string;
  }
}
