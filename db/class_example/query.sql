-- SELECT e.name AS event_name,
--        p.name AS participant_name
-- FROM event_participant ep
-- INNER JOIN event e ON ep.event_id = e.id
-- INNER JOIN participant p ON ep.participant_id = p.id
-- ORDER BY e.name;

SELECT event.name AS "Event Name",
       participant.name AS "Participant Name",
       event_participant.participant_id
FROM EVENT,
     PARTICIPANT,
     EVENT_PARTICIPANT
WHERE PARTICIPANT.ID = EVENT_PARTICIPANT.PARTICIPANT_ID
  AND EVENT.ID = EVENT_PARTICIPANT.EVENT_ID
ORDER BY event.name;