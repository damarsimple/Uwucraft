import {
    makeStyles,
    Theme,
    createStyles,
    Paper,
    Grid,
    Button
} from "@material-ui/core";
import { Formik, FormikHelpers, Form, Field } from "formik";
import React from "react";
import { sendMessage } from "../../api/graphql";
import { User } from "../../type/type";
import SendIcon from "@material-ui/icons/Send";
interface ChatFormData {
    friend: User;
}
interface ChatBoxInput {
    message: any;
}
function ChatForm(props: ChatFormData) {
    return (
        <Paper square elevation={3}>
            <Formik
                initialValues={{
                    message: ""
                }}
                onSubmit={(
                    values: ChatBoxInput,
                    { setSubmitting, resetForm }: FormikHelpers<ChatBoxInput>
                ) => {
                    sendMessage(props.friend.id, values.message);
                    setSubmitting(false);
                    //@ts-ignore
                    resetForm({ message: "" });
                }}
            >
                <Form>
                    <Grid
                        container
                        justify="center"
                        alignItems="center"
                        spacing={1}
                    >
                        <Grid item xs={9}>
                            <Field
                                id="message"
                                name="message"
                                placeholder="John"
                            />
                        </Grid>
                        <Grid item xs={3}>
                            <Button type="submit">
                                <SendIcon />
                            </Button>
                        </Grid>
                    </Grid>
                </Form>
            </Formik>
        </Paper>
    );
}

export default ChatForm;
