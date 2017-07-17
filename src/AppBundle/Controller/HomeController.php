<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Users;
use AppBundle\Entity\UsersTeams;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\User;

class HomeController extends Controller
{
    /**
     * @Route("/home", name="homepage")
     */
    public function indexAction()
    {
        $userid = $this->getUser()->getId();

        return $this->redirectToRoute('homepageUser', [ 'id' => $userid ]);
    }

    /**
     * @Route("/home/{id}", name="homepageUser")
     */
    public function userHomepage(Users $userid)
    {
        $id = $userid->getId();

        $connection =$this->get('database_connection');
        $user = $connection->fetchAll(
            'SELECT u.username, u.name, u.lastname, u.email
              FROM users as u
              WHERE u.id = ?
              ', [$id]
        );

        $userteams = $connection->fetchAll(
            'SELECT t.teamname, t.id, ut.id as uit
              FROM usersteams as ut, teams as t
              WHERE ut.teams_id = t.id
              AND ut.user_id = ?
              Order BY t.id DESC ', [$id]
        );

        $usertasks=$connection->fetchAll(
            'SELECT task.taskname, task.id, teams.teamname
            FROM tasks as task, users as usr, teams
            WHERE task.authorUser_id = usr.id AND usr.id=? AND task.team_id = teams.id', [$id]);

        return $this->render('homepage/homepage.html.twig', array(
            'usersteams' => $userteams,
            'usertasks' => $usertasks,
            'user' => $user,
        ));

    }
}