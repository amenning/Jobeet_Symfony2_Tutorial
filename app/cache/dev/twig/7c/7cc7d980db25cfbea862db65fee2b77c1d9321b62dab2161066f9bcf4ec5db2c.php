<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_36dd3b0336c929dbf4809e71144a9ccb8f8068a1457a3cca52c88edbfcf7050d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f8cc03ea142537c4cf67f7d9f181c966107406eb5971ff17d3c0c3e2777a49e = $this->env->getExtension("native_profiler");
        $__internal_6f8cc03ea142537c4cf67f7d9f181c966107406eb5971ff17d3c0c3e2777a49e->enter($__internal_6f8cc03ea142537c4cf67f7d9f181c966107406eb5971ff17d3c0c3e2777a49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6f8cc03ea142537c4cf67f7d9f181c966107406eb5971ff17d3c0c3e2777a49e->leave($__internal_6f8cc03ea142537c4cf67f7d9f181c966107406eb5971ff17d3c0c3e2777a49e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
